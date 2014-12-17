<?php

?>

<div class="indistone">
    <div>
        <div>
        <h3>SilverOasis User Menu</h3>
        <ul>
            <li>
                <a href="/?action=myinfo" title="Update my info">
                    <img src='com.web.images/updateInfo.png' alt='update info' title='update info' />
                </a>
            </li>
        </ul>
        <?php if(LoggedInUserIsAdmin()) : ?>

        <h3>Administration Manager</h3>
        <ul>
            <li>
                <a href="/?action=editusers" title="Edit Users">
                    <img src='com.web.images/editUser.png' alt='edit user' title='edit user' />
                </a>
            </li>
        </ul>

        <?php endif; ?>
        </div>
    </div>
</div>