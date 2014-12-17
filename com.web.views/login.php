<?php 
?>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="/com.web.js/login.js" ></script>
<!-- ===========================START LOGIN.PHP================================= -->
        <div class="about">
            <div class="content">
                <ul>
                    <li>
                        
                    <h3>SilverOasis Entertainment Registrar</h3>

                        <div id="loginregister">
                            <form action="/?action=menu" method="POST" id="registerform"><!-- was registersubmit-->
                                <input type="hidden" name="actiontype" id="actiontype" value="" />
                                    <fieldset>
                                        <legend>Register for a SilverOasis account here:</legend><br />
                                        First Name: <input type="text" name="firstname" id="firstname" /><br />
                                        Last Name: <input type="text" name="lastname" id="lastname" /><br />
                                        Email Address: <input type="email" name="emailreg" id="emailreg" /><br />
                                        Password: <input type="password" name="passwordreg1" id="passwordreg1" /><br />
                                        Verify Password: <input type="password" name="passwordreg2" id="passwordreg2" /><br />
                                        <button name="register" id="buttonRegister">Register</button>
                                    </fieldset>
                            </form>
                            <br /><br />
                            <form action="/?action=loginsubmit" method="POST" id="loginform">
                                <fieldset>
                                    <legend>Login with existing account</legend>
                                    Email Address: <input type="text" name="emaillogin" id="emaillogin" /><br />
                                    Password: <input type="password" name="passwordlogin" id="passwordlogin" /><br />
                                    <button name="login" id="buttonLogin">Login</button>
                                </fieldset>
                            </form>
                        </div>

                    </li>
                </ul>
            </div>

            <div class="aside">
                <ul>
                    <li>
                        <h3>other Links of Interest</h3>
                        <div>
                            <p class="whiteColor">
                                <br>
                                <a href="/index.php?action=one"          title="Dawnstone: Chapter One">Dawnstone: Chapter One</a><br />
                                <a href="/index.php?action=oneptone"     title="Dawnstone: Chapter Two">Dawnstone: Chapter Two</a><br />
                                <a href="/index.php?action=onepttwo"     title="Dawnstone: Chapter Three">Dawnstone: Chapter Three</a><br />
                                <a href="/index.php?action=oneptthree"   title="Dawnstone: Chapter Four">Dawnstone: Chapter Four</a><br />
                                <a href="/index.php?action=oneptfour"    title="Dawnstone: Chapter Five">Dawnstone: Chapter Five</a><br />
                                <a href="/index.php?action=oneptfive"    title="Dawnstone: Chapter Six">Dawnstone: Chapter Six</a><br />
                                <a href="/index.php?action=two"          title="The High Lord">The High Lord</a><br />
                                <a href="/index.php?action=three"        title="E.R.M.A.">E.R.M.A.</a><br />
                                <a href="/index.php?action=four"         title="Soulbound">Soulbound</a><br />
                                <a href="/index.php?action=five"         title="Our Royal Cannon">Our Royal Cannon</a><br />
                                <a href="/index.php?action=six"          title="Primitive Helix">Primitive Helix</a><br />
                                <a href="/index.php?action=seven"        title="Hogwarts">Harry Potter &AMP; Your Hogwarts</a><br />
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ===========================END LOGIN.PHP================================= -->
<br />