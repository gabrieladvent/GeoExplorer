<style>
    #menu {
        background: #0099CC;
        height: 45px;
        padding-left: 18px;
        border-radius: 10px;
    }

    #menu ul,
    #menu li {
        margin: 0 auto;
        padding: 0;
        list-style: none
    }

    #menu ul {
        width: 100%;
        text-align: left;
    }

    #menu li {
        display: inline-block;
        position: relative;
    }

    #menu a {
        display: block;
        line-height: 45px;
        padding: 0 14px;
        text-decoration: none;
        color: #FFFFFF;
        font-size: 16px;
    }

    #menu a.dropdown-arrow:after {
        content: "\25BE";
        margin-left: 5px;
    }

    #menu li a:hover {
        color: #0099CC;
        background: #F2F2F2;
    }

    #menu input {
        display: none;
        margin: 0;
        padding: 0;
        height: 45px;
        width: 100%;
        opacity: 0;
        cursor: pointer
    }

    #menu label {
        display: none;
        line-height: 45px;
        text-align: center;
        position: absolute;
        left: 35px
    }

    #menu label:before {
        font-size: 1.6em;
        color: #FFFFFF;
        content: "\2261";
        margin-left: 20px;
    }

    #menu ul.sub-menus {
        height: auto;
        overflow: hidden;
        width: 170px;
        background: #444444;
        position: absolute;
        z-index: 99;
        display: none;
    }

    #menu ul.sub-menus li {
        display: block;
        text-align: left;
        width: 100%;
    }

    #menu ul.sub-menus a {
        color: #FFFFFF;
        font-size: 16px;
    }

    #menu li:hover ul.sub-menus {
        display: block
    }

    #menu ul.sub-menus a:hover {
        background: #F2F2F2;
        color: #444444;
    }

    @media screen and (max-width: 800px) {
        #menu {
            position: relative
        }

        #menu ul {
            background: #444444;
            position: absolute;
            top: 100%;
            right: 0;
            left: 0;
            z-index: 3;
            height: auto;
            display: none;
            text-align: left;
        }

        #menu ul.sub-menus {
            width: 100%;
            position: static;
        }

        #menu ul.sub-menus a {
            padding-left: 30px;
        }

        #menu li {
            display: block;
            float: none;
            width: auto;
        }

        #menu input,
        #menu label {
            position: absolute;
            top: 0;
            left: 0;
            display: block
        }

        #menu input {
            z-index: 4
        }

        #menu input:checked+label {
            color: #FFFFFF
        }

        #menu input:checked+label:before {
            content: "\00d7"
        }

        #menu input:checked~ul {
            display: block
        }
    }
</style>
<nav id='menu'>
    <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
    <ul>
        <li><a href='http://'>Home</a></li>
        <li><a class='dropdown-arrow' href='http://'>Products</a>
            <ul class='sub-menus'>
                <li><a href='http://'>Products 1</a></li>
                <li><a href='http://'>Products 2</a></li>
                <li><a href='http://'>Products 3</a></li>
                <li><a href='http://'>Products 4</a></li>
            </ul>
        </li>
        <li><a href='http://'>About</a></li>
        <li><a class='dropdown-arrow' href='http://'>Services</a>
            <ul class='sub-menus'>
                <li><a href='http://'>Services 1</a></li>
                <li><a href='http://'>Services 2</a></li>
                <li><a href='http://'>Services 3</a></li>
            </ul>
        </li>
        <li><a href='http://'>Contact Us</a></li>
    </ul>
</nav>

<script>
    function updatemenu() {
        if (document.getElementById('responsive-menu').checked == true) {
            document.getElementById('menu').style.borderBottomRightRadius = '0';
            document.getElementById('menu').style.borderBottomLeftRadius = '0';
        } else {
            document.getElementById('menu').style.borderRadius = '10px';
        }
    }
</script>
