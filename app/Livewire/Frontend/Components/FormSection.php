<?php

namespace App\Livewire\Frontend\Components;

use App\Models\Lead;
use Livewire\Component;
use App\Services\CountryService;
use App\Services\ProductService;
use Livewire\Attributes\Validate;
use App\Services\ValidationService;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class FormSection extends Component
{

    ## Component props
    public array $dataList;
    public string $sectionTitle;
    public string $sectionSubTitle;
    public string $isShowSectionHeader;
    public $showProductInput, $showSubjectInput, $showRequestDemoButton, $showSendMessageButton, $showTermsConditionCheck;
    public int $limit;
    public array $state;


    #[Validate]
    public string $name = '';
    #[Validate]
    public string $email = '';
    #[Validate]
    public string $phone = '';
    #[Validate]
    public string $country_id = '';
    public string $product_id = '';
    public string $phoneCode = '***';
    public string $message = '';

    public array $countries;
    public array $result;
    public array $resultWithCollection;

    ## Services
    private ProductService $productService;
    private CountryService $countryService;
    private ValidationService $ValidationService;

    public function boot()
    {
        $this->productService = new ProductService;
        $this->countryService = new CountryService;
        $this->ValidationService = new ValidationService;
    }

    /**
     * Create a new component instance.
     * @param string $sectionTitle `Title of the section`
     * @param string $sectionSubTitle `Sub title of the section`
     * @param int $limit `Number of items to display in the section`
     * @return void
     */
    public function mount(string $sectionTitle = '', string $sectionSubTitle = '', int $limit = 6, $showProductInput = true, $showSubjectInput = true, $showRequestDemoButton = true, $showSendMessageButton = true, $showTermsConditionCheck = true): void
    {
        $this->showProductInput = $showProductInput;
        $this->showSubjectInput = $showSubjectInput;
        $this->showRequestDemoButton = $showRequestDemoButton;
        $this->showSendMessageButton = $showSendMessageButton;
        $this->showTermsConditionCheck = $showTermsConditionCheck;

        $this->sectionTitle = $sectionTitle ? __($sectionTitle) : "";
        $this->sectionSubTitle = $sectionSubTitle ? __($sectionSubTitle) : "";

        $this->isShowSectionHeader = (!empty($this->sectionTitle) || !empty($this->sectionSubTitle)) ? true : false;

        $this->limit = $limit;

        $this->state = $this->getStateDefault();

        $this->countries = $this->countryService->getCountries();
    }

    private function getStateDefault(): array
    {
        return [
            'name' => '',
            'email' => '',
            'country_id' => '',
            'phone' => '',
            'product_id' => '',
            'message' => '',
        ];
    }


    /**
     * When the country_id is updated, get the phone code
     *
     * @param int $countryId
     */
    public function updatedCountryId($countryId)
    {
        // Call the getPhoneCode function and pass the selected countryId
        $this->phoneCode = $this->countryService->getPhoneCode($countryId);
    }


    /**
     * Validation rules of the component
     * @return array
     */
    public function rules(): array
    {
        return $this->ValidationService->validationRules();
    }

    /**
     * Validation error messages for state properties of the component
     * @return array
     */
    public function messages(): array
    {
        return $this->ValidationService->validationErrorMessages();
    }


    /**
     * Alias of state attributes
     * @return array
     */
    public function validationAttributes()
    {
        return $this->ValidationService->validationAttributesSurname();
    }


    public function updating($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    /**
     * Handle form submission.
     */
    public function submitForm()
    {
        // $this->validate();

        Lead::create([
            'name' => $this->name,
            'email' => $this->email,
            'country_id' => $this->country_id,
            'mobile_number' => $this->phone,
            'product_id' => $this->product_id ?? null,
            'message' => $this->message,
        ]);

        $this->reset();

        session()->flash('message_', 'Your message has been sent successfully!');
    }


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        $this->dataList = collect($this->productService->getStaticModels(limit: $this->limit))->pluck('title', 'id')->toArray();

        return view('livewire.frontend.components.form-section');
    }
}
