<?php
    return array(
		'admin/gallery' => 'admin/gallery',
		'admin' => 'admin/index',
		'songs/deleteFile/([0-9]+)/([\w+.(mp3|pdf|wave)])' => 'songs/deleteFile/$1/$2',
        'songs/([0-9]+)' => 'songs/index/$1',
        'songs/page-([0-9]+)' => 'songs/view/$1',
        'songs/newSong' => 'songs/newSong',
        'songs/editSong/([0-9]+)' => 'songs/editSong/$1',
		'songs/changeActual/([0-9]+)' => 'songs/changeActual/$1',
        'songs/uploadFile/([0-9]+)' => 'songs/uploadFile/$1',
        'songs/priorityFilter-([0-9]+)' => 'songs/priorityFilter/$1',
		'songs/applyFilters' => 'songs/applyFilters',
        'songs/delete/([0-9]+)' => 'songs/delete/$1',
        'songs/search' => 'songs/search',
        'songs' => 'songs/view',
        'folders/delete/([0-9]+)' => 'folders/delete/$1',
        'folders/newFolder' => 'folders/newFolder',
        'folders' => 'folders/view',
        'queries/deleteQuery/([0-9]+)' => 'queries/deleteQuery/$1',
        'queries/transferQuery/([0-9]+)' => 'queries/transferQuery/$1',
        'queries' => 'queries/queriesView',
        'users/register' => 'users/register',
        'users/login' => 'users/login',
        'users/view' => 'users/view',
        'users/deleteUser/([0-9]+)' => 'users/deleteUser/$1',
        'users/logout' => 'users/logout',
        'users/changeRights/([0-9]+)/([A-z]+)' => 'users/changeRights/$1/$2',
        'cabinet' => 'cabinet/index',
        'main/szulik' => 'main/szulik',
        'main/members' => 'main/members',
        'main/contact' => 'main/contact',
        'main/hoffman' => 'main/hoffman',
        'main/history' => 'main/history',
		'main/achivments' => 'main/achivments',
		'main/gallery' => 'main/gallery',
		'main/koncerty' => 'main/koncerty',
		'main/wyjazdy' => 'main/wyjazdy',
		'main/glosy' => 'main/glosy',
		'main/iza' => 'main/iza',
		'main/news' => 'main/news',
        'main' => 'main/mainPage',
        'news/view/([0-9]+)' => 'news/view/$1',
        'news/delete/([0-9]+)' => 'news/delete/$1',
        'news/newItem' => 'news/newItem',
        'news' => 'news/index',
        '' => 'main/mainPage',
    );