<?php

return [
    'props' => [
        /**
         * Sets the help text
         */
        'help' => function (string $help = null) {
            return I18n::translate($help);
        }
    ]
];
