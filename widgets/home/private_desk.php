<div class="private-desk-home">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center center left">
                <div>
                    <h2>Private Desk</h2>
                    <p class="desc1">Secure a dedicated desk and thrive within a vibrant ​community of enthusiastic
                        professionals, all sharing the same ​workspace. With 24/7 access, you'll have the freedom to
                        ​make the most of your workspace whenever inspiration ​strikes. It's a place where ideas flow
                        freely, networking ​opportunities abound, and success is a collective endeavor.</p>
                    <div class="list-container">
                        <div class="item-container">24/7 access</div>
                        <div class="item-container">P.O. box & mail management</div>
                        <div class="item-container">Meeting room & printing credits</div>
                        <div class="item-container">Secure high-speed WIFI</div>
                        <div class="item-container">Personal locker</div>
                        <div class="item-container">Herman miller chair</div>
                        <div class="item-container">Access to coworking lounges</div>
                        <div class="item-container">Access to community events</div>
                    </div>
                </div>



            </div>
            <div class="col-md-6">
                <img src="<?php echo $_ENV['ROOT_PATH'] ?>/images/goldeneyes/3.jpg" alt=""
                    style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</div>

<style>
    .private-desk-home {
        padding: 4em 0px;
        background-color: var(--background-color);
    }

    .private-desk-home .left {
        padding: 30px;
    }

    .private-desk-home .row {
        background-color: var(--white-color);
    }

    .private-desk-home .center {}

    .private-desk-home h2 {
        color: var(--black-color);
    }

    .private-desk-home .desc1 {
        font-size: 20.8px;
        font-weight: 600;
        color: #737373;
        padding-bottom: 15px;
    }

    .private-desk-home .desc2 {
        color: var(--black-color);
    }

    .list-container {
        position: relative;
        padding-left: 15px;
    }

    .list-container::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 5px;
        background-image: linear-gradient(to right, var(--gradient-color1), var(--gradient-color2));
    }

    .item-container {
        padding: 0px 0;
    }
</style>