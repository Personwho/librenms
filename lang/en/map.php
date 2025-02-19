<?php

return [
    'custom' => [
        'title' => [
            'edit_dialog' => 'Select Custom Map To Edit',
            'create' => 'Create New Custom Map',
            'view' => ':name | Custom Map',
            'edit' => 'Edit Custom Map',
            'manage' => 'Manage Custom Maps',
        ],
        'create_map' => 'New Map',
        'view' => [
            'loading' => 'Loading data',
            'no_devices' => 'No devices found',
        ],
        'edit' => [
            'text_font' => 'Text Font',
            'text_size' => 'Text Size',
            'text_color' => 'Text Color',
            'defaults' => 'Set Defaults',
            'bg' => [
                'title' => 'Set Background',
                'background' => 'Background',
                'clear_bg' => 'Clear BG',
                'clear_background' => 'Clear Background',
                'keep_background' => 'Keep Background',
                'saving' => 'Saving...',
                'save_errors' => 'Save failed due to the following errors:',
                'save_error' => 'Save failed.  Server returned error response code: :code',
                'save' => 'Save Background',
            ],
            'map' => [
                'settings_title' => 'Map Settings',
                'name' => 'Name',
                'width' => 'Width',
                'height' => 'Height',
                'alignment' => 'Node Alignment',
                'saving' => 'Saving...',
                'save_errors' => 'Save failed due to the following errors:',
                'save_error' => 'Save failed.  Server returned error response code: :code',
                'delete' => 'Delete Map',
                'list' => 'Return to map list',
                'unsavedchanges' => 'You have unsaved changes.  Press confirm to discard changes and return to the map list, or cancel to return to the editor.',
                'edit' => 'Edit Map Settings',
                'rerender' => 'Re-Render Map',
                'save' => 'Save Map',
            ],
            'node' => [
                'new' => 'New Node',
                'add' => 'Add Node',
                'edit' => 'Edit Node',
                'defaults_title' => 'Node Default Config',
                'label' => 'Label',
                'name' => 'Node Name',
                'device_select' => 'Select Device',
                'edit_defaults' => 'Edit Node Defaults',
                'map_link' => 'Link to Map',
                'map_select' => 'Select Map...',
                'style' => 'Style',
                'style_options' => [
                    'box' => 'Box',
                    'circle' => 'Circle',
                    'database' => 'Database',
                    'ellipse' => 'Ellipse',
                    'text' => 'Text',
                    'device_image' => 'Device Image',
                    'device_image_circle' => 'Device Image (Circular)',
                    'diamond' => 'Diamond',
                    'dot' => 'Dot',
                    'star' => 'Star',
                    'triangle' => 'Triangle',
                    'triangle_inverted' => 'Triangle Inverted',
                    'hexagon' => 'Hexagon',
                    'square' => 'Square',
                    'icon' => 'Icon (select below)',
                ],
                'icon' => 'Icon',
                'icon_options' => [
                    'server' => 'Server',
                    'desktop' => 'Desktop',
                    'dish' => 'Satellite Dish',
                    'satellite' => 'Satellite',
                    'wifi' => 'Wifi',
                    'cloud' => 'Cloud',
                    'globe' => 'Globe',
                    'tower' => 'Tower',
                    'arrow_right' => 'Arrow - Right',
                    'arrow_left' => 'Arrow - Left',
                    'arrow_up' => 'Arrow - Up',
                    'arrow_down' => 'Arrow - Down',
                ],
                'image' => 'Image',
                'image_options' => [
                    'adc' => 'Application Delivery Controller',
                    'firewall' => 'Firewall',
                    'gtm' => 'Global Traffic Manager',
                    'router' => 'Router',
                    'switch-l2' => 'Switch - L2',
                    'switch-l3' => 'Switch - L3',
                ],
                'size' => 'Node Size',
                'bg_color' => 'Background Color',
                'border_color' => 'Border Color',
            ],
            'edge' => [
                'new' => 'New Edge',
                'add' => 'Add Edge',
                'defaults_title' => 'Edge Default Config',
                'from' => 'From',
                'to' => 'To',
                'port_select' => 'Select Port',
                'reverse' => 'Reverse Port Direction',
                'edit_defaults' => 'Edit Edge Defaults',
                'style' => 'Line Style',
                'style_options' => [
                    'dynamic' => 'Dynamic',
                    'continuous' => 'Continuous',
                    'discrete' => 'Discrete',
                    'diagonalCross' => 'Diagonal Cross',
                    'straightCross' => 'Straight Cross',
                    'horizontal' => 'Horizontal',
                    'vertical' => 'Vertical',
                    'curvedCW' => 'Curved Clockwise',
                    'curvedCCW' => 'Curved Counter Clockwise',
                    'cubicBezier' => 'Cubic Bezier',
                ],
                'show_usage_percent' => 'Show percent usage',
                'recenter' => 'Recenter Line',
            ],
            'validate' => [
                'width_format' => 'Width must be a number followed by px or %',
                'width_percent' => 'Width percent must be between 10 and 100',
                'width_pixels' => 'Width in pixels must be at least 200',
                'height_format' => 'Height must be a number followed by px or %',
                'height_percent' => 'Height percent must be between 10 and 100',
                'height_pixels' => 'Height in pixels must be at least 200',
            ],
        ],
    ],
];
