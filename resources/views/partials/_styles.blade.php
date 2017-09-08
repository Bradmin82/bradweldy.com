<style>
            nav.navbar {
                position: fixed;
                top: 0px;
                width: 100%;
                z-index: 99;
            }
            @media(min-width: 991px) {
                nav li.account {
                    position: absolute;
                    right: 25px;
                }
                nav .dropdown-menu.show {
                    left: -75px;
                }
            }
            .container {
                margin-top: 75px;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                /*color: #B0BEC5;*/
                display: table;
                font-weight: 100;
                /*font-family: 'Lato';*/
            }

            /*.container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }*/

            .content.about, 
            .content.contact {
                text-align: center;
                display: block;
                vertical-align: middle;

                margin-top: 75px;

                color: #B0BEC5;
                font-weight: 100;
                font-family: 'Lato';
            }

            .title {
                font-size: 96px;
                margin-bottom: 40px;
            }

            .quote {
                font-size: 24px;
            }


        </style>