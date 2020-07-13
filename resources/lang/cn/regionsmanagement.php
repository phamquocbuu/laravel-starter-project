<?php

return [
    'import-regions' => 'Import Regions',
    'import-regions-choose-file' => 'Choose a file to import data',
    // Titles
    'showing-all-regions'     => 'Showing All Regions',
    'regions-menu-alt'        => 'Show Regions Management Menu',
    'create-new-region'       => 'Create New Region',
    'import-region'       => 'Import Regions',
    'show-deleted-regions'    => 'Show Deleted Region',
    'editing-region'          => 'Editing Region :name',
    'showing-region'          => 'Showing Region :name',
    'showing-region-region'    => ':name\'s Information',

    // Flash Messages
    'createSuccess'   => 'Successfully created! ',
    'updateSuccess'   => 'Successfully updated! ',
    'deleteSuccess'   => 'Successfully deleted! ',

    // Show Region Tab
    'viewProfile'            => 'View Profile',
    'editTitle'               => 'Edit Region',
    'deleteTitle'             => 'Delete Region',
    'titlesBackBtn'           => 'Back to Regions',
    'titlesPanelTitle'        => 'Region Information',
    'labelUserName'          => 'Username:',
    'labelEmail'             => 'Email:',
    'labelFirstName'         => 'First Name:',
    'labelLastName'          => 'Last Name:',
    'labelRole'              => 'Role:',
    'labelStatus'            => 'Status:',
    'labelAccessLevel'       => 'Access',
    'labelPermissions'       => 'Permissions:',
    'labelCreatedAt'         => 'Created At:',
    'labelUpdatedAt'         => 'Updated At:',
    'labelIpEmail'           => 'Email Signup IP:',
    'labelIpConfirm'         => 'Confirmation IP:',
    'labelIpSocial'          => 'Socialite Signup IP:',
    'labelIpAdmin'           => 'Admin Signup IP:',
    'labelIpUpdate'          => 'Last Update IP:',
    'labelDeletedAt'         => 'Deleted on',
    'labelIpDeleted'         => 'Deleted IP:',
    'titlesDeletedPanelTitle' => 'Deleted Region Information',
    'titlesBackDelBtn'        => 'Back to Deleted Regions',

    'successRestore'    => 'Region successfully restored.',
    'successDestroy'    => 'Region record successfully destroyed.',
    'errorTitleNotFound' => 'Region not found.',

    'labelUserLevel'  => 'Level',
    'labelUserLevels' => 'Levels',

    'regions-table' => [
        'caption'      => '{1} :regionscount region total|[2,*] :regionscount total regions',
        'id'           => 'ID',
        'name'        => 'Name',
        'type'        => 'Type',
        'staff'        => 'Management Staff',
        'parent'        => 'Parent',
        'created'      => 'Created',
        'updated'      => 'Updated',
        'actions'      => 'Actions',
    ],

    'buttons' => [
        'create-new'    => 'New Region',
        'import-regions'    => 'Import Regions',
        'delete'        => '<i class="fa m-0 fa-trash fa-fw" aria-hidden="true"></i>',
        'show'          => '<i class="fa m-0 fa-eye fa-fw" aria-hidden="true"></i>',
        'edit'          => '<i class="fa m-0 fa-pencil-alt fa-fw" aria-hidden="true"></i>',
        'back-to-regions' => '<span class="hidden-sm hidden-xs">Back to </span><span class="hidden-xs">Regions</span>',
        'back-to-region'  => 'Back  <span class="hidden-xs">to Region</span>',
        'delete-region'   => '<i class="fa fa-trash fa-fw" aria-hidden="true"></i>  <span class="hidden-xs">Delete</span><span class="hidden-xs"> Region</span>',
        'edit-region'     => '<i class="fa fa-pencil-alt fa-fw" aria-hidden="true"></i> <span class="hidden-xs">Edit</span><span class="hidden-xs"> Region</span>',
    ],

    'tooltips' => [
        'delete'        => 'Delete',
        'show'          => 'Show',
        'edit'          => 'Edit',
        'create-new'    => 'Create New Region',
        'back-regions'    => 'Back to Regions',
        'email-region'    => 'Email :region',
        'submit-search' => 'Submit Regions Search',
        'clear-search'  => 'Clear Search Results',
    ],

    'messages' => [
        'nameTaken'          => 'Name is taken',
        'nameRequired'       => 'Name is required',
        'userNotExist'       => 'Management Staff not exist',
        'fNameRequired'          => 'First Name is required',
        'lNameRequired'          => 'Last Name is required',
        'emailRequired'          => 'Email is required',
        'emailInvalid'           => 'Email is invalid',
        'passwordRequired'       => 'Password is required',
        'PasswordMin'            => 'Password needs to have at least 6 characters',
        'PasswordMax'            => 'Password maximum length is 20 characters',
        'captchaRequire'         => 'Captcha is required',
        'CaptchaWrong'           => 'Wrong captcha, please try again.',
        'roleRequired'           => 'Region role is required.',
        'region-creation-success'  => 'Successfully created region!',
        'update-region-success'    => 'Successfully updated region!',
        'delete-success'         => 'Successfully deleted the region!',
        'cannot-delete-yourself' => 'You cannot delete yourself!',
    ],

    'show-region' => [
        'id'                => 'Region ID',
        'name'              => 'Username',
        'email'             => '<span class="hidden-xs">Region </span>Email',
        'role'              => 'Region Role',
        'created'           => 'Created <span class="hidden-xs">at</span>',
        'updated'           => 'Updated <span class="hidden-xs">at</span>',
        'labelRole'         => 'Region Role',
        'labelAccessLevel'  => '<span class="hidden-xs">Region</span> Access Level|<span class="hidden-xs">Region</span> Access Levels',
    ],

    'search'  => [
        'region'             => 'Showing Search Results',
        'found-footer'      => ' Record(s) found',
        'no-results'        => 'No Results',
        'search-regions-ph'   => 'Search Titles',
    ],

    'modals' => [
        'delete_title_message' => 'Are you sure you want to delete :region?',
    ],
];