<?php

return [
    'import-drop-points'             => 'Import Drop Points',
    'import-drop-points-choose-file' => 'Choose a file to import data',
    // Titles
    'showing-all-drop-points'        => 'Showing All Drop Points',
    'drop-points-menu-alt'           => 'Show Drop Points Management Menu',
    'create-new-drop-point'          => 'Create New Drop Point',
    'import-drop-point'              => 'Import Drop Points',
    'show-deleted-drop-points'       => 'Show Deleted Drop Point',
    'editing-drop-point'             => 'Editing Drop Point :name',
    'showing-drop-point'             => 'Showing Drop Point :name',
    'showing-drop-point-drop-point'  => ':name\'s Information',

    // Flash Messages
    'createSuccess'                  => 'Successfully created! ',
    'updateSuccess'                  => 'Successfully updated! ',
    'deleteSuccess'                  => 'Successfully deleted! ',

    // Show Drop Point Tab
    'viewProfile'                    => 'View Profile',
    'editTitle'                      => 'Edit Drop Point',
    'deleteTitle'                    => 'Delete Drop Point',
    'titlesBackBtn'                  => 'Back to Drop Points',
    'titlesPanelTitle'               => 'Drop Point Information',
    'labelUserName'                  => 'Username:',
    'labelEmail'                     => 'Email:',
    'labelFirstName'                 => 'First Name:',
    'labelLastName'                  => 'Last Name:',
    'labelRole'                      => 'Role:',
    'labelStatus'                    => 'Status:',
    'labelAccessLevel'               => 'Access',
    'labelPermissions'               => 'Permissions:',
    'labelCreatedAt'                 => 'Created At:',
    'labelUpdatedAt'                 => 'Updated At:',
    'labelIpEmail'                   => 'Email Signup IP:',
    'labelIpConfirm'                 => 'Confirmation IP:',
    'labelIpSocial'                  => 'Socialite Signup IP:',
    'labelIpAdmin'                   => 'Admin Signup IP:',
    'labelIpUpdate'                  => 'Last Update IP:',
    'labelDeletedAt'                 => 'Deleted on',
    'labelIpDeleted'                 => 'Deleted IP:',
    'titlesDeletedPanelTitle'        => 'Deleted Drop Point Information',
    'titlesBackDelBtn'               => 'Back to Deleted Drop Points',

    'successRestore'     => 'Drop Point successfully restored.',
    'successDestroy'     => 'Drop Point record successfully destroyed.',
    'errorTitleNotFound' => 'Drop Point not found.',

    'labelUserLevel'  => 'Level',
    'labelUserLevels' => 'Levels',

    'drop-points-table' => [
        'caption' => '{1} :regionscount drop point total|[2,*] :regionscount total drop-points',
        'id'       => 'ID',
        'name'     => 'Name',
        'type'     => 'Type',
        'staff'    => 'Management Staff',
        'parent'   => 'Parent',
        'created'  => 'Created',
        'updated'  => 'Updated',
        'actions'  => 'Actions',
        'area'     => 'Area',
        'province' => 'Province',
        'district' => 'District',
        'ward'     => 'Ward',
        'code'     => 'Code',
    ],

    'buttons' => [
        'create-new'          => 'New Drop Point',
        'import-drop-points'  => 'Import Drop Points',
        'delete'              => '<i class="fa m-0 fa-trash fa-fw" aria-hidden="true"></i>',
        'show'                => '<i class="fa m-0 fa-eye fa-fw" aria-hidden="true"></i>',
        'edit'                => '<i class="fa m-0 fa-pencil-alt fa-fw" aria-hidden="true"></i>',
        'back-to-drop-points' => '<span class="hidden-sm hidden-xs">Back to </span><span class="hidden-xs">Drop Points</span>',
        'back-to-drop-point'  => 'Back  <span class="hidden-xs">to Drop Point</span>',
        'delete-drop-point'   => '<i class="fa fa-trash fa-fw" aria-hidden="true"></i>  <span class="hidden-xs">Delete</span><span class="hidden-xs"> Drop Point</span>',
        'edit-drop-point'     => '<i class="fa fa-pencil-alt fa-fw" aria-hidden="true"></i> <span class="hidden-xs">Edit</span><span class="hidden-xs"> Drop Point</span>',
    ],

    'tooltips' => [
        'delete'           => 'Delete',
        'show'             => 'Show',
        'edit'             => 'Edit',
        'create-new'       => 'Create New Drop Point',
        'back-drop-points' => 'Back to Drop Points',
        'email-drop-point' => 'Email :drop-point',
        'submit-search'    => 'Submit Drop Points Search',
        'clear-search'     => 'Clear Search Results',
    ],

    'messages' => [
        'nameTaken'                   => 'Name is taken',
        'nameRequired'                => 'Name is required',
        'userNotExist'                => 'Management Staff not exist',
        'userRequired'                => 'Management Staff is required',
        'fNameRequired'               => 'First Name is required',
        'lNameRequired'               => 'Last Name is required',
        'emailRequired'               => 'Email is required',
        'emailInvalid'                => 'Email is invalid',
        'passwordRequired'            => 'Password is required',
        'PasswordMin'                 => 'Password needs to have at least 6 characters',
        'PasswordMax'                 => 'Password maximum length is 20 characters',
        'captchaRequire'              => 'Captcha is required',
        'CaptchaWrong'                => 'Wrong captcha, please try again.',
        'roleRequired'                => 'Drop Point role is required.',
        'drop-point-creation-success' => 'Successfully created drop point!',
        'update-drop-point-success'   => 'Successfully updated drop point!',
        'delete-success'              => 'Successfully deleted the drop point!',
        'cannot-delete-yourself'      => 'You cannot delete yourself!',
        'statusBool'                  => 'Please choose a status',
        'statusRequired'              => 'Please choose a status',
        'typeIn'                      => 'Please choose a type',
        'typeRequired'                => 'Please choose a type',
        'wardNotExists'               => 'Selected ward not exists',
        'addressMax'                  => 'Address is too long',
        'codeRequired'                => 'Code is required',
        'codeUnique'                  => 'Code must unique',
    ],

    'show-drop-point' => [
        'id'               => 'Drop Point ID',
        'name'             => 'Username',
        'email'            => '<span class="hidden-xs">Drop Point </span>Email',
        'role'             => 'Drop Point Role',
        'created'          => 'Created <span class="hidden-xs">at</span>',
        'updated'          => 'Updated <span class="hidden-xs">at</span>',
        'labelRole'        => 'Drop Point Role',
        'labelAccessLevel' => '<span class="hidden-xs">Drop Point</span> Access Level|<span class="hidden-xs">Drop Point</span> Access Levels',
    ],

    'search' => [
        'drop-point'            => 'Showing Search Results',
        'found-footer'          => ' Record(s) found',
        'no-results'            => 'No Results',
        'search-drop-points-ph' => 'Search Titles',
    ],

    'modals' => [
        'delete_title_message' => 'Are you sure you want to delete :drop-point?',
    ],
];
