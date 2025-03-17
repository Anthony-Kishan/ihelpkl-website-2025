<?php

namespace App\Services;

use Illuminate\Support\Facades\Vite;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SolutionService
{
    /**
     * Get static models
     * @return \array
     */
    public function getStaticModels(string $slug = '', int $limit = 5)
    {
        $dataList = [
            [
                'meta_title' => 'Best CRM Software in Malaysia: Top Solutions for Your Business',
                'meta_description' => 'Discover the best CRM software in Malaysia to boost your business. Explore tailored CRM solutions with powerful features for enhanced customer management',
                'meta_keywords' => 'crm software, CRM software Malaysia, crm software sample',
                'title' => 'Best CRM Software in Malaysia',
                'subTitle' => 'Tailored Solutions for Your Business',
                'slug' => route('web.solutions.details', ['slug' => 'best-crm-software-malaysia']),
                'body' => "Discover the Power of CRM Platform",
                'short_details' => "In today's competitive business environment, choosing the right CRM system is crucial for enhancing customer relationships and driving growth. Whether you're a small startup or a large enterprise, the right CRM solution can streamline your processes, improve customer service, and boost sales efficiency.",
                'img_featured' => Vite::imageWeb('blog-img1.jpg'),
                'img_thumb' => Vite::imageWeb('project-img6.jpg'),
                'keyPoints' => [],

                'characteristics' => [
                    'title' => 'What to Look for When Choosing',
                    'subTitle' => 'Best CRM System',
                    'shortDetails' => 'Here are some important factors to consider when choosing a CRM solution for your company',
                    'items' => [
                        [
                            'heading' => 'Customer Support',
                            'body' => 'Ensure that your CRM provider offers 24/7 support to address any issues promptly.',
                            'icon' =>  _icons('agent'),
                        ],
                        [
                            'heading' => 'Pricing',
                            'body' => 'Compare prices to find a CRM system that offers the best value for your business.',
                            'icon' =>  _icons('money'),
                        ],
                        [
                            'heading' => 'Security',
                            'body' => 'Secure your data across all chains. Protect customer information with robust security. Build trust through data compliance. Prioritize security in your multi-chain CRM',
                            'icon' =>  _icons('lock'),
                        ]
                    ]
                ],
                'services2' => [
                    'title' => 'The Best CRM Solutions in Malaysia',
                    'subTitle' => 'Features that Set Them Apart',
                    'shortDetails' => 'When considering the best CRM system for your business, look for a solution that offers',
                    'items' => [
                        [
                            'heading' => 'Customizable Features',
                            'body' => 'A CRM application that adapts to your business needs ensures you can tailor it for maximum efficiency.',
                            'icon' =>  _icons('database_gear'),
                        ],
                        [
                            'heading' => 'User-friendly Interface',
                            'body' => 'Simplicity is key in any CRM platform, ensuring that your team can easily access and manage customer data.',
                            'icon' =>  _icons('display'),
                        ],
                        [
                            'heading' => 'Automation Tools',
                            'body' => 'From lead management to follow-up reminders, a great CRM solution automates routine tasks, freeing up time for your team to focus on building relationships.',
                            'icon' =>  _icons('setting'),
                        ],
                        [
                            'heading' => 'Scalability',
                            'body' => 'As your business grows, your CRM should grow with it, accommodating more contacts and complex workflows.',
                            'icon' =>  _icons('api'),
                        ],
                    ]
                ],
                'choose2' => [
                    'title' => 'Versatile CRM Solutions',
                    'subTitle' => 'Why CRM Solutions in Malaysia Stand Out',
                    'shortDetails' => "Many businesses in Malaysia are turning to CRM tools to stay competitive in the global marketplace. The best CRM systems available are not only tailored to local business needs but also offer global integrations, ensuring smooth communication with customers around the world. Whether you need an example of a CRM tool for managing sales pipelines or are looking to evaluate different CRM solutions, there's a system for every business size and type.",
                    'imgFeatured' => Vite::imageWeb('choose-img2.jpg'),
                    'imgThumb' => null,
                    'imgFrame' => Vite::imageWeb('choose-line.png'),

                ],
                'imageOne' => [
                    'title' => 'Effective sales strategies',
                    'subTitle' => 'Get Started with the Best CRM Solutions in Malaysia',
                    'shortDetails' => "Investing in a CRM solution will help you track customer interactions, improve sales strategies, and enhance overall business performance. Take the time to explore different options available and find the right CRM system that suits your needs.",
                    'imgFeatured' => Vite::imageWeb('testimonial-img2.jpg'),
                    'imgThumb' => null,
                    'imgFrame' => Vite::imageWeb('choose-line.png'),


                ],
                'faqs' => [
                    'title' => 'Ready to take your business to the next level with CRM software in Malaysia?',
                    'subTitle' => "Learn more",
                    'items' => [
                        [
                            'heading' => 'What is the best CRM software for small businesses in Malaysia?',
                            'body' => 'The best CRM solution for small businesses in Malaysia depends on features like ease of use, automation capabilities, and scalability. Many solutions allow businesses to optimize customer interactions and sales processes, making them ideal for smaller teams looking to improve efficiency.',
                        ],
                        [
                            'heading' => 'How can CRM systems help improve customer service in Malaysia?',
                            'body' => 'CRM systems improve customer service by centralizing customer data and interactions, allowing businesses to resolve queries faster, personalize responses, and build stronger relationships with customers. ',
                        ],
                        [
                            'heading' => 'Can you provide an example of a CRM tool used in Malaysia?',
                            'body' => 'A popular CRM tool in Malaysia integrates with local business systems, allowing companies to manage sales leads, track customer communications, and automate follow-ups. ',
                        ],
                        [
                            'heading' => 'What are the key features of a good CRM solution in Malaysia?',
                            'body' => 'A good CRM solution in Malaysia should offer customization options, an intuitive interface, automation features, and scalability. These features make it easier for businesses to track customer interactions, enhance engagement, and improve sales efficiency.',
                        ],
                        [
                            'heading' => 'Why is it important to choose the right CRM system for your business in Malaysia?',
                            'body' => 'Selecting the right CRM system helps businesses manage customer relationships effectively, improve lead tracking, and enhance sales strategies.',
                        ],
                        [
                            'heading' => 'How can CRM software samples assist in making the right choice?',
                            'body' => 'Exploring CRM software samples allows businesses to assess different features, interfaces, and pricing structures before committing to a system. ',
                        ],
                        [
                            'heading' => 'What sets CRM solutions in Malaysia apart from others?',
                            'body' => 'CRM solutions in Malaysia are designed to cater to local business needs, offering integration with regional tools and compliance with local regulations. These solutions are also scalable, ensuring they can grow alongside your business without requiring major system changes.',
                        ],
                        [
                            'heading' => 'How does a CRM system boost sales efficiency in Malaysia?',
                            'body' => 'The system enhances sales efficiency by automating tasks such as lead follow-ups and customer reminders. With real-time data and efficient workflows, sales teams can focus more on building relationships and closing deals effectively.',
                        ],
                        [
                            'heading' => 'How does CRM software improve customer data management in Malaysia?',
                            'body' => 'This software centralizes all customer data, making it easier for businesses in Malaysia to track interactions, gain insights into customer behavior, and personalize communication. This results in better decision-making and stronger customer relationships.',
                        ],
                        [
                            'heading' => 'Can CRM applications help manage social media interactions in Malaysia?',
                            'body' => 'Yes, many CRM applications in Malaysia integrate with social media platforms, allowing businesses to track and respond to customer inquiries and feedback directly through these channels. This feature improves engagement and strengthens the brand’s relationship with customers.',
                        ]
                    ]
                ],


            ],

            [
                'meta_title' => 'Top Web Development Solutions in Malaysia for Your Business Growth',
                'meta_description' => 'Discover innovative web development solutions in Malaysia. From corporate to e-commerce websites, we deliver tailored, scalable, and future-ready designs',
                'meta_keywords' => 'Web Development, malaysia website developer, website developer in malaysia, company for website design',
                'title' => 'Web Solutions in Malaysia ',
                'subTitle' => 'Web Development Solutions Tailored for Your Business',
                'slug' => route('web.solutions.details', ['slug' => 'web-development-solutions-malaysia']),
                'short_details' => "At our web development company in Malaysia, we provide innovative and customized solutions to meet the unique needs of businesses across various industries. With years of expertise, our team of skilled Malaysia website developers is dedicated to delivering websites that are not only visually appealing but also highly functional, ensuring maximum impact for your business",
                'img_featured' => Vite::imageWeb('blog-img2.jpg'),
                'img_thumb' => Vite::imageWeb('project-img6.jpg'),
                'keyPoints' => [],

                'services2' => [
                    'title' => 'Why Choose Us',
                    'subTitle' => 'As Your Web Development Partner?',
                    'shortDetails' => 'We specialize in creating a wide range of websites tailored to different business objectives',
                    'items' => [
                        [
                            'heading' => 'Corporate Websites',
                            'body' => 'Build credibility and showcase your brand identity with a professional corporate website.',
                            'icon' =>  _icons('corporate'),
                        ],
                        [
                            'heading' => 'Portfolio Websites',
                            'body' => 'Highlight your work and achievements with visually stunning portfolio designs.',
                            'icon' =>  _icons('portfolio'),
                        ],
                        [
                            'heading' => 'Membership Websites',
                            'body' => 'Enable exclusive content access and enhance user engagement with secure membership platforms.',
                            'icon' =>  _icons('money'),
                        ],
                        [
                            'heading' => 'E-commerce Websites',
                            'body' => 'Expand your business with a robust online store, complete with secure payment gateways and inventory management.',
                            'icon' =>  _icons('cart'),
                        ],

                    ],
                    'characteristics' => [],
                ],

                'projects' => [
                    'title' => 'Cutting-Edge Technology For Global Standard Solutions',
                    'subTitle' => 'Scalable and Future-Ready',
                    'shortDetails' => '',
                    'items' => [
                        [
                            'title' => 'Local Expertise, Global Standards',
                            'body' => 'As a leading website company in Malaysia, we combine local market insights with global best practices to deliver websites that resonate with your audience while adhering to international standards.',
                            'img' => Vite::imageWeb('solution-slider-3.jpg'),
                        ],
                        [
                            'title' => 'Scalable and Future-Ready Solutions',
                            'body' => "Whether you're a startup or an established enterprise, our website development services in Malaysia are designed to scale with your business. From small websites to complex platforms, we ensure your website evolves as your needs grow.",
                            'img' => Vite::imageWeb('solution-slider-2.jpg'),
                        ],
                        [
                            'title' => 'Cutting-Edge Technology',
                            'body' => 'We leverage the latest web development technologies to build secure, fast, and responsive websites that provide an exceptional user experience. Our tools and platforms are ideal for building : E-commerce Websites, Corporate Websites, Membership Platforms.',
                            'img' => Vite::imageWeb('solution-slider-1.jpg'),
                        ]
                    ]
                ],
                'characteristics' => [
                    'title' => 'What to Look for When Choosing',
                    'subTitle' => 'Features That Set Us Apart',
                    'shortDetails' => 'Here are some important factors to consider when choosing a CRM solution for your company',
                    'items' => [
                        [
                            'heading' => 'Custom Design',
                            'body' => 'Unique, user-centric designs that align with your brand identity.',
                            'icon' =>  _icons('settings'),
                        ],
                        [
                            'heading' => 'Responsive Websites',
                            'body' => 'Optimized for seamless performance across all devices.',
                            'icon' =>  _icons('display'),
                        ],
                        [
                            'heading' => 'SEO-Optimized',
                            'body' => "Boost your website's visibility on search engines.",
                            'icon' =>  _icons('search'),
                        ],
                        [
                            'heading' => ' Fast Loading Speed',
                            'body' => 'Minimize bounce rates with quick-loading web pages.',
                            'icon' =>  _icons('dashboard'),
                        ],
                        [
                            'heading' => '24/7 Support',
                            'body' => 'Dedicated customer support to ensure uninterrupted website performance.',
                            'icon' =>  _icons('agent'),
                        ]
                    ]
                ],
                'choose2' => [
                    'title' => 'Web development solutions in Malaysia',
                    'subTitle' => 'Ready to Transform Your Online Presence?',
                    'shortDetails' => "Let us help you create a website that drives results. Whether you're looking for a corporate website, a portfolio website, or an e-commerce platform, our team is here to turn your vision into reality. Contact us today to learn more about our web development solutions in Malaysia and discover how we can take your business to the next level!.",
                    'imgFeatured' => Vite::imageWeb('choose-img2.jpg'),
                    'imgThumb' => null,
                    'imgFrame' => Vite::imageWeb('choose-line.png'),


                ],
                'imageOne' => [
                    'title' => 'Website development company in Malaysia',
                    'subTitle' => 'Why Malaysian Businesses Trust Us',
                    'shortDetails' => "As one of the top 3 developers in Malaysia, we have established ourselves as a trusted partner for businesses looking to grow their digital presence. Our ability to deliver customized solutions, coupled with a client-first approach, has made us a go-to website development company in Malaysia.",
                    'imgFeatured' => Vite::imageWeb('testimonial-img2.jpg'),
                    'imgThumb' => null,
                    'imgFrame' => Vite::imageWeb('choose-line.png'),


                ],
                'faqs' => [
                    'title' => 'Ready to take your business to the next level with CRM software in Malaysia?',
                    'subTitle' => "Learn more",
                    'items' => [
                        [
                            'heading' => 'What is web development and why is it important for my business?',
                            'body' => 'Web development is the process of designing, building, and maintaining websites. A well-developed website can significantly enhance your online presence, attract more customers, improve user experience, and drive sales, making it a crucial aspect of any modern business strategy.',
                        ],
                        [
                            'heading' => 'Why should I choose a web development company in Malaysia?',
                            'body' => 'Choosing a web development company in Malaysia allows businesses to benefit from local expertise and market understanding. A Malaysia-based team can provide custom website solutions that meet both global standards and local preferences, while also offering cost-effective services.',
                        ],
                        [
                            'heading' => 'What types of websites can a professional website developer create?',
                            'body' => 'A skilled website developer can create various types of websites, including corporate sites, portfolio showcases, membership platforms, and online stores (e-commerce). These websites are designed to meet the unique needs of businesses across different industries.',
                        ],
                        [
                            'heading' => 'How do I select the right website development company? ',
                            'body' => 'When choosing a website development company, look for a proven track record, strong portfolio, positive client reviews, and a deep understanding of your business needs. A reliable team will work with you to design and develop a website that aligns with your goals and provides value to your audience.',
                        ],
                        [
                            'heading' => 'What are the advantages of having an e-commerce website for my business?',
                            'body' => "An e-commerce website helps you sell products or services online, reaching a global audience. It accelerates sales with features like secure payment processing, inventory management, and customer tracking, ultimately improving your business's efficiency and growth potential.",
                        ],
                        [
                            'heading' => 'What sets top web development companies apart from others?',
                            'body' => "Leading web development companies stand out through their expertise in innovative design, attention to detail, excellent customer service, and ability to deliver high-quality websites on time. They focus on creating user-friendly, responsive websites that contribute to the success of your business.",
                        ],

                    ]
                ]


            ],

            [
                'meta_title' => "Innovate Your Business with AI & Application Integration",
                'meta_description' => ' Ascertain cohesive application integration and AI-powered solutions to enhance workflows, boost efficiency, and deliver personalized customer experiences.',
                'meta_keywords' => 'application integration framework,integration in malay, artificial intelligence in malaysia, artificial intelligence integration, application development',
                'title' => 'Application integration',
                'subTitle' => ' Modern Solutions with AI and Application Integration',
                'slug' => route('web.solutions.details', ['slug' => 'ai-application-integration-solution']),
                'body' => "Discover the Power of CRM Platform",
                'short_details' => "In today’s competitive market, staying ahead requires seamless workflows, intelligent tools, and enhanced customer experiences. At the core of this transformation lies the application of integration and AI-driven technologies, helping businesses achieve efficiency, scalability, and innovation.",
                'img_featured' => Vite::imageWeb('blog-img3.jpg'),
                'img_thumb' => Vite::imageWeb('project-img6.jpg'),
                'keyPoints' => [],
                'services2' => [
                    'title' => 'Business Growth',
                    'subTitle' => 'What We Offer?',
                    'shortDetails' => '',
                    'items' => [
                        [
                            'heading' => 'Application Integration Framework',
                            'body' => 'Our robust frameworks ensure all your software systems work together effortlessly. By connecting APIs and synchronizing data, we streamline your business operations for improved productivity.',
                            'icon' =>  _icons('database'),
                        ],
                        [
                            'heading' => "AI Integration for Business Growth",
                            'body' => "Unlock the power of artificial intelligence integration to automate repetitive tasks, personalize customer interactions, and gain actionable insights. Whether it's enhancing your AI call systems or powering predictive analytics, we tailor AI solutions to meet your needs",
                            'icon' =>  _icons('business'),
                        ],
                        [
                            'heading' => 'Omnichannel Solutions',
                            'body' => 'Manage customer interactions across multiple platforms, including WhatsApp, email, and more. With our omnichannel contact center software, deliver consistent and efficient support across all channels.',
                            'icon' =>  _icons('magic'),
                        ],
                        [
                            'heading' => 'Advanced Call Center Tools',
                            'body' => 'From call recording and monitoring to intelligent missed-call forwarding and personalized greetings, our call center solutions redefine customer service excellence in Malaysia and beyond.',
                            'icon' =>  _icons('headset'),
                        ],
                        [
                            'heading' => 'AI in Applications',
                            'body' => "Whether it’s powering application development for WhatsApp, integrating email systems, or designing cutting-edge CRM solutions, we ensure your tools are smarter and future-ready.",
                            'icon' =>  _icons('robot'),
                        ],
                    ]
                ],

                'characteristics' => [
                    'title' => 'Choose us for quality, satisfaction, and innovation',
                    'subTitle' => 'Why Choose Us?',
                    'shortDetails' => '',
                    'items' => [
                        [
                            'heading' => 'Efficiency & Automation',
                            'body' => 'Simplify workflows and save time by automating key processes',
                            'icon' =>  _icons('agent'),
                        ],
                        [
                            'heading' => 'Future-Ready Technology',
                            'body' => 'Stay ahead with AI and integration solutions tailored to your business goals.',
                            'icon' =>  _icons('money'),
                        ],
                        [
                            'heading' => 'Data-Driven Insights',
                            'body' => 'Make informed decisions with real-time analytics powered by AI',
                            'icon' =>  _icons('lock'),
                        ],
                        [
                            'heading' => 'Enhanced Customer Experiences',
                            'body' => 'Deliver personalized, professional support that keeps customers engaged and satisfied.',
                            'icon' =>  _icons('lock'),
                        ],
                        [
                            'heading' => 'Localized Expertise',
                            'body' => 'With deep knowledge of artificial intelligence in Malaysia, we cater to local business needs while staying aligned with global standards.',
                            'icon' =>  _icons('lock'),
                        ],
                    ]
                ],
                'faqs' => [
                    'title' => 'Ready to take your business to the next level with  AI & Application Integration in Malaysia?',
                    'subTitle' => "Learn more",
                    'items' => [
                        [
                            'heading' => 'What is application integration?',
                            'body' => 'Application integration connects multiple software systems, enabling unified communication and consistent workflows.',
                        ],
                        [
                            'heading' => 'How does AI integration improve business operations?',
                            'body' => 'AI integration automates tasks, enhances decision-making, and personalized customer interactions for improved efficiency and growth.',
                        ],
                        [
                            'heading' => 'What are omnichannel solutions?',
                            'body' => 'Omnichannel solutions allow businesses to manage customer interactions across multiple platforms, like WhatsApp, email, and voice calls, in one unified system.',
                        ],
                        [
                            'heading' => 'How is artificial intelligence used in Malaysia?',
                            'body' => 'AI is transforming industries in Malaysia by automating processes, delivering predictive insights, and improving customer engagement in sectors like retail, finance, and customer service.',
                        ],
                        [
                            'heading' => 'What is the role of APIs in integration?',
                            'body' => 'APIs (Application Programming Interfaces) enable different software systems to communicate, ensuring data is shared efficiently between applications.',
                        ],
                        [
                            'heading' => 'Why invest in AI-powered call center tools?',
                            'body' => 'AI-powered call centers automate routine tasks, provide 24/7 support, and enhance customer satisfaction through smarter, faster interactions.',
                        ],
                    ]
                ],
            ],
        ];

        if (!empty($slug)) {
            $filteredItems = array_filter($dataList, function ($item) use ($slug) {
                return $item['slug'] == $slug;
            });
            $firstItem = reset($filteredItems);
            return $firstItem !== false ? $firstItem : [];
        }
        return collect($dataList)->take($limit)->toArray();
    }
}
