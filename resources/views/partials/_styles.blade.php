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
            
            /* Texture test */
            .texture-1 {
			    background-repeat: no-repeat;
			    background-size: cover;
			    background-image: url(/img/copy_texture_1_large.jpg);
			    color: #90b6e3;
			}
			.texture-1-animate {
				animation: slide-it 75s ease-out infinite;
			}
			.masked-copy h1 {
				color: inherit;
		        color: transparent !important;
		        font-weight: 400;
		    }

			@supports (-webkit-background-clip: text) {
			    .masked-copy {
			        -webkit-background-clip:text;
			        color: transparent !important;
			    }
			}
			.word {
			  position: relative;
			  animation: slide-in-right 2s ease-out forwards;
			  animation-delay: 0s;
			  opacity: 0;
			}
			
			@keyframes slide-it {
			  0% {
			    background-position: 0 50px;
			  }
			  60% {
			    background-position: 0 -200px;
			  }
			  100% {
			    background-position: 0 50px;
			  }
			}


        </style>