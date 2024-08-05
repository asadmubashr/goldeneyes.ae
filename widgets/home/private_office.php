<div class="private-office-home">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
                <img src="<?php echo $_ENV['ROOT_PATH'] ?>/images/goldeneyes/4.jpg" alt=""
                    style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="col-md-6 left">
                <div>
                    <h2>Private Office</h2>
                    <p class="desc1">Secure a dedicated desk and thrive within a vibrant ​community of enthusiastic
                        professionals, all sharing the same ​workspace. With 24/7 access, you'll have the freedom to
                        ​make the most of your workspace whenever inspiration ​strikes. It's a place where ideas flow
                        freely, networking ​opportunities abound, and success is a collective endeavor.</p>
                    <div class="list-container-right">
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
        </div>
    </div>
</div>

<style>
    .private-office-home {
        padding: 4em 0px;
        background-color: var(--background-color);
    }

    .private-office-home .left {
        padding: 30px;
        text-align: right;
    }

    .private-office-home .row {
        background-color: var(--white-color);
    }

    .private-office-home .center {}

    .private-office-home h2 {
        color: var(--black-color);
    }

    .private-office-home .desc1 {
        font-size: 20.8px;
        font-weight: 600;
        color: #737373;
        padding-bottom: 15px;
    }

    .private-office-home .desc2 {
        color: var(--black-color);
    }

    .list-container-right {
        position: relative;
        padding-right: 15px;
    }

    .list-container-right::before {
        content: '';
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        width: 5px;
        background-image: linear-gradient(to right, var(--gradient-color1), var(--gradient-color2));
    }

    .item-container {
        padding: 0px 0;
    }
</style>