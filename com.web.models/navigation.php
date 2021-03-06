<?php
/*
 * CIT 336 - BYUI
 * SilverOasis Entertainment, Dr. Sterling Grant
 */

// Returns an array where the key is the Action and the value is the text for the link.
function GetPrimaryNavigationItems()
{
    $nav = array(
        'home'      => 'Home',
        'contact'   => 'Contact',
        'projects'  => 'Projects',
        'about'     => 'About'
    );
    
    if (CheckSession())
    {
        
        $nav['menu'] = 'Menu';
        $nav['logout'] = 'Log Out';
    }
    else
    {
        $nav['login'] = 'Log In';
    }
    
    return $nav;
}
function GetFooterItems() {
    
    $footer = array(
     'siteplan' => 'Site Plan',
     'presentation' => 'Presentation'   
    );
    
}