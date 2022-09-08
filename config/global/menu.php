<?php

return array(
    // Documentation menu
    'documentation' => array(
        // Getting Started
        array(
            'heading' => 'Getting Started',
        ),

        // Overview
        array(
            'title' => 'Overview',
            'path'  => 'documentation/getting-started/overview',
        ),

        // Build
        array(
            'title' => 'Build',
            'path'  => 'documentation/getting-started/build',
        ),

        array(
            'title'      => 'Multi-demo',
            'attributes' => array("data-kt-menu-trigger" => "click"),
            'classes'    => array('item' => 'menu-accordion'),
            'sub'        => array(
                'class' => 'menu-sub-accordion',
                'items' => array(
                    array(
                        'title'  => 'Overview',
                        'path'   => '#',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'Build',
                        'path'   => '#',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),

        // File Structure
        array(
            'title' => 'File Structure',
            'path'  => 'documentation/getting-started/file-structure',
        ),

        // Customization
        array(
            'title'      => 'Customization',
            'attributes' => array("data-kt-menu-trigger" => "click"),
            'classes'    => array('item' => 'menu-accordion'),
            'sub'        => array(
                'class' => 'menu-sub-accordion',
                'items' => array(
                    array(
                        'title'  => 'SASS',
                        'path'   => '#',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'Javascript',
                        'path'   => '#',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),

        // Dark skin
        array(
            'title' => 'Dark Mode Version',
            'path'  => '#',
        ),

        // RTL
        array(
            'title' => 'RTL Version',
            'path'  => '#',
        ),

        // Troubleshoot
        array(
            'title' => 'Troubleshoot',
            'path'  => '#',
        ),

        // Changelog
        array(
            'title'            => 'Changelog <span class="badge badge-changelog badge-light-danger bg-hover-danger text-hover-white fw-bold fs-9 px-2 ms-2">v'.theme()->getVersion().'</span>',
            'breadcrumb-title' => 'Changelog',
            'path'             => 'documentation/getting-started/changelog',
        ),

        // References
        array(
            'title' => 'References',
            'path'  => 'documentation/getting-started/references',
        ),


        // Separator
        array(
            'custom' => '<div class="h-30px"></div>',
        ),

        // Configuration
        array(
            'heading' => 'Configuration',
        ),

        // General
        array(
            'title' => 'General',
            'path'  => 'documentation/configuration/general',
        ),

        // Menu
        array(
            'title' => 'Menu',
            'path'  => 'documentation/configuration/menu',
        ),

        // Page
        array(
            'title' => 'Page',
            'path'  => 'documentation/configuration/page',
        ),

        // Page
        array(
            'title' => 'Add NPM Plugin',
            'path'  => 'documentation/configuration/npm-plugins',
        ),


        // Separator
        array(
            'custom' => '<div class="h-30px"></div>',
        ),

        // General
        array(
            'heading' => 'General',
        ),

        // DataTables
        array(
            'title'      => 'DataTables',
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array("data-kt-menu-trigger" => "click"),
            'sub'        => array(
                'class' => 'menu-sub-accordion',
                'items' => array(
                    array(
                        'title'  => 'Overview',
                        'path'   => 'documentation/general/datatables/overview',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),

        // Remove demos
        array(
            'title' => 'Remove Demos',
            'path'  => 'documentation/general/remove-demos',
        ),


        // Separator
        array(
            'custom' => '<div class="h-30px"></div>',
        ),

        // HTML Theme
        array(
            'heading' => 'HTML Theme',
        ),

        array(
            'title' => 'Components',
            'path'  => '//preview.keenthemes.com/metronic8/demo1/documentation/base/utilities.html',
        ),

        array(
            'title' => 'Documentation',
            'path'  => '//preview.keenthemes.com/metronic8/demo1/documentation/getting-started.html',
        ),
    ),

    // Main menu
    'main'          => array(
        //// Dashboard
        array(
            'title' => 'Dashboard',
            'path'  => '',
            'icon'  => theme()->getSvgIcon("demo1/media/icons/duotune/art/art002.svg", "svg-icon-2"),
        ),

        //// Modules
        array(
            'classes' => array('content' => 'pt-8 pb-2'),
            'content' => '<span class="menu-section text-muted text-uppercase fs-8 ls-1">Modules</span>',
        ),

        // Account
        // array(
        //     'title'      => 'Account',
        //     'icon'       => array(
        //         'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
        //         'font' => '<i class="bi bi-person fs-2"></i>',
        //     ),
        //     'classes'    => array('item' => 'menu-accordion'),
        //     'attributes' => array(
        //         "data-kt-menu-trigger" => "click",
        //     ),
        //     'sub'        => array(
        //         'class' => 'menu-sub-accordion menu-active-bg',
        //         'items' => array(
        //             array(
        //                 'title'  => 'Overview',
        //                 'path'   => 'account/overview',
        //                 'bullet' => '<span class="bullet bullet-dot"></span>',
        //             ),
        //             array(
        //                 'title'  => 'Settings',
        //                 'path'   => 'account/settings',
        //                 'bullet' => '<span class="bullet bullet-dot"></span>',
        //             ),
        //             array(
        //                 'title'      => 'Security',
        //                 'path'       => '#',
        //                 'bullet'     => '<span class="bullet bullet-dot"></span>',
        //                 'attributes' => array(
        //                     'link' => array(
        //                         "title"             => "Coming soon",
        //                         "data-bs-toggle"    => "tooltip",
        //                         "data-bs-trigger"   => "hover",
        //                         "data-bs-dismiss"   => "click",
        //                         "data-bs-placement" => "right",
        //                     ),
        //                 ),
        //             ),
        //         ),
        //     ),
        // ),

        // // System
        // array(
        //     'title'      => 'System',
        //     'icon'       => array(
        //         'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
        //         'font' => '<i class="bi bi-layers fs-3"></i>',
        //     ),
        //     'classes'    => array('item' => 'menu-accordion'),
        //     'attributes' => array(
        //         "data-kt-menu-trigger" => "click",
        //     ),
        //     'sub'        => array(
        //         'class' => 'menu-sub-accordion menu-active-bg',
        //         'items' => array(
        //             array(
        //                 'title'      => 'Settings',
        //                 'path'       => '#',
        //                 'bullet'     => '<span class="bullet bullet-dot"></span>',
        //                 'attributes' => array(
        //                     'link' => array(
        //                         "title"             => "Coming soon",
        //                         "data-bs-toggle"    => "tooltip",
        //                         "data-bs-trigger"   => "hover",
        //                         "data-bs-dismiss"   => "click",
        //                         "data-bs-placement" => "right",
        //                     ),
        //                 ),
        //             ),
        //             array(
        //                 'title'  => 'Audit Log',
        //                 'path'   => 'log/audit',
        //                 'bullet' => '<span class="bullet bullet-dot"></span>',
        //             ),
        //             array(
        //                 'title'  => 'System Log',
        //                 'path'   => 'log/system',
        //                 'bullet' => '<span class="bullet bullet-dot"></span>',
        //             ),
        //         ),
        //     ),
        // ),


        array(
            'title'      => 'Bookings',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-layers fs-3"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'      => 'Booking List',
                        'path'       => '/bookings',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'Add a booking',
                        'path'   => '/booking/add',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    // array(
                    //     'title'  => 'System Log',
                    //     'path'   => 'log/system',
                    //     'bullet' => '<span class="bullet bullet-dot"></span>',
                    // ),
                ),
            ),
        ),


        // array(
        //     'title'      => 'Destinations',
        //     'icon'       => array(
        //         'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
        //         'font' => '<i class="bi bi-layers fs-3"></i>',
        //     ),
        //     'classes'    => array('item' => 'menu-accordion'),
        //     'attributes' => array(
        //         "data-kt-menu-trigger" => "click",
        //     ),
        // ),

        array(
            'title' => 'Destinations',
            'path'  => '/destination',
            'icon'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
        ),
        
        
        // array(
        //     'title'      => 'Activities',
        //     'icon'       => array(
        //         'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
        //         'font' => '<i class="bi bi-layers fs-3"></i>',
        //     ),
        //     'classes'    => array('item' => 'menu-accordion'),
        //     'attributes' => array(
        //         "data-kt-menu-trigger" => "click",
        //     ),
        // ),

        array(
            'title' => 'Activities',
            'path'  => '/activity',
            'icon'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
        ),


        // array(
        //     'title'      => 'Regions',
        //     'icon'       => array(
        //         'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
        //         'font' => '<i class="bi bi-layers fs-3"></i>',
        //     ),
        //     'classes'    => array('item' => 'menu-accordion'),
        //     'attributes' => array(
        //         "data-kt-menu-trigger" => "click",
        //     ),
        // ),


        array(
            'title' => 'Regions',
            'path'  => '/region',
            'icon'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
        ),
        
        
        array(
            'title'      => 'Programs',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-layers fs-3"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'      => 'Add new Program',
                        'path'       => '/program/add',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'      => 'List All Program',
                        'path'       => '/program',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'      => 'Tour Tags',
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),
        
        
        array(
            'title'      => 'Pages',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-layers fs-3"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'      => 'Add a Page',
                        'path'       => '/page/add',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'List all pages',
                        'path'   => '/pages',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    // array(
                    //     'title'  => 'System Log',
                    //     'path'   => 'log/system',
                    //     'bullet' => '<span class="bullet bullet-dot"></span>',
                    // ),
                ),
            ),
        ),
        
        
        array(
            'title'      => 'Blogs',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-layers fs-3"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'      => 'Blog Categories',
                        'path'       => '/blogCategory',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'Blog Tags',
                        'path'   => '/blogTags',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'BlogPages',
                        'path'   => '/blogPages',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),

        array(
            'title'      => 'File Manager',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-layers fs-3"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'      => 'Media Lists',
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                  
                ),
            ),
        ),
        
        array(
            'title'      => 'Reviews',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-layers fs-3"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'      => 'Add a review',
                        'path'       => '/review/add',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                     array(
                        'title'      => 'List all reviews',
                        'path'       => '/review',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                  
                ),
            ),
        ),


        array(
            'title'      => 'Team',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-layers fs-3"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'      => 'Add a member',
                        'path'       => '/team/add',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                     array(
                        'title'      => 'List All Members',
                        'path'       => '/teams',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                  
                ),
            ),
        ),

        array(
            'title' => 'Messages',
            'path'  => '/messages',
            'icon'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
        ),
        
        
        array(
            'title'      => 'Setting',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-layers fs-3"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'      => 'Global',
                        'path'       => '/global',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'      => 'Account',
                        'path'       => '/account',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'      => 'Navigation',
                        'path'       => '/navigation',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'      => 'Widgets',
                        'path'       => '/widget',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'      => 'Payments',
                        'path'       => '/payment',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'      => 'Users',
                        'path'       => '/allusers',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'      => 'Emails',
                        'path'       => '/email',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),



        // Separator
        array(
            'content' => '<div class="separator mx-1 my-4"></div>',
        ),

        // Changelog
        array(
            'title' => 'Changelog v'.theme()->getVersion(),
            'icon'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen005.svg", "svg-icon-2"),
            'path'  => 'documentation/getting-started/changelog',
        ),
    ),

    // Horizontal menu
    'horizontal'    => array(
        // Dashboard
        array(
            'title'   => 'Dashboard',
            'path'    => '',
            'classes' => array('item' => 'me-lg-1'),
        ),

        // Resources
        array(
            'title'      => 'Resources',
            'classes'    => array('item' => 'menu-lg-down-accordion me-lg-1', 'arrow' => 'd-lg-none'),
            'attributes' => array(
                'data-kt-menu-trigger'   => "click",
                'data-kt-menu-placement' => "bottom-start",
            ),
            'sub'        => array(
                'class' => 'menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px',
                'items' => array(
                    // Documentation
                    array(
                        'title' => 'Documentation',
                        'icon'  => theme()->getSvgIcon("demo1/media/icons/duotune/abstract/abs027.svg", "svg-icon-2"),
                        'path'  => 'documentation/getting-started/overview',
                    ),

                    // Changelog
                    array(
                        'title' => 'Changelog v'.theme()->getVersion(),
                        'icon'  => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen005.svg", "svg-icon-2"),
                        'path'  => 'documentation/getting-started/changelog',
                    ),
                ),
            ),
        ),

        // Account
        array(
            'title'      => 'Account',
            'classes'    => array('item' => 'menu-lg-down-accordion me-lg-1', 'arrow' => 'd-lg-none'),
            'attributes' => array(
                'data-kt-menu-trigger'   => "click",
                'data-kt-menu-placement' => "bottom-start",
            ),
            'sub'        => array(
                'class' => 'menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px',
                'items' => array(
                    array(
                        'title'  => 'Overview',
                        'path'   => 'account/overview',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'Settings',
                        'path'   => 'account/settings',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'      => 'Security',
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'attributes' => array(
                            'link' => array(
                                "title"             => "Coming soon",
                                "data-bs-toggle"    => "tooltip",
                                "data-bs-trigger"   => "hover",
                                "data-bs-dismiss"   => "click",
                                "data-bs-placement" => "right",
                            ),
                        ),
                    ),
                ),
            ),
        ),

        // System
        array(
            'title'      => 'System',
            'classes'    => array('item' => 'menu-lg-down-accordion me-lg-1', 'arrow' => 'd-lg-none'),
            'attributes' => array(
                'data-kt-menu-trigger'   => "click",
                'data-kt-menu-placement' => "bottom-start",
            ),
            'sub'        => array(
                'class' => 'menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px',
                'items' => array(
                    array(
                        'title'      => 'Settings',
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'attributes' => array(
                            'link' => array(
                                "title"             => "Coming soon",
                                "data-bs-toggle"    => "tooltip",
                                "data-bs-trigger"   => "hover",
                                "data-bs-dismiss"   => "click",
                                "data-bs-placement" => "right",
                            ),
                        ),
                    ),
                    array(
                        'title'  => 'Audit Log',
                        'path'   => 'log/audit',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'System Log',
                        'path'   => 'log/system',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),
    ),
);
