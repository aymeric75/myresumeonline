<template>

    <nav class="navbar navbar-default transform" id="navbar-example" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li @click="selected = 1" :class="{active:selected == 1}"><a href="#profile">Profile</a></li>
                <li @click="selected = 2" :class="{active:selected == 2}"><a href="#experiences">Expériences</a></li>
                <li @click="selected = 3" :class="{active:selected == 3}"><a href="#abilities">Aptitudes</a></li>
                <li @click="selected = 4" :class="{active:selected == 4}"><a href="#projects">Projets</a></li>
                <li @click="selected = 5" :class="{active:selected == 5}"><a href="#contact">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav> 


</template>



<script>

    export default {


        data() {
            return {
                shift: true,
                selected: undefined
            }
        },

        mounted() {
            $('#top').css('height',$(window).height());
            $('#top > .overlay').css('height','inherit');

            var top_height = $("#top").height();

            var shift = true;

            $(window).scroll(function (event) {
                var scroll = $(window).scrollTop();

                if(scroll > top_height && shift == true) {
                    $("#navbar-example").addClass('marginTop');
                    shift = false;
                    console.log("shift = "+shift);

                } 

                if(scroll < top_height && shift == false) {
                    $("#navbar-example").removeClass('marginTop');
                    shift = true;
                    console.log("shift = "+shift);
                }
            });


            /* gestion des changements de fond du menu */


            // calcul de la hauteur du scroll, si telle hauteur alors selected = tel nbre
                                                            // 

            var vm  = this;

            $(window).scroll(function (event) {


                var scroll = $(window).scrollTop();

                var top_height = $('#top').height();
                var profile_height = $('#profile').height();
                var experiences_height = $('#experiences').height();
                var abilities_height = $('#abilities').height();
                var projects_height = $('#projects').height();
                console.log("selected = "+vm.selected);
                if(scroll < top_height+profile_height) {
                    vm.selected = 1;
                } else if ( top_height+profile_height < scroll && scroll < top_height+profile_height+experiences_height ) {
                    vm.selected = 2;
                } else if ( top_height+profile_height+experiences_height < scroll && scroll < top_height+profile_height+experiences_height+abilities_height ) {
                    vm.selected = 3;
                } else if ( top_height+profile_height+experiences_height+abilities_height < scroll && scroll < top_height+profile_height+experiences_height+abilities_height+projects_height ) {
                    vm.selected = 4;
                } else {
                    vm.selected = 5;
                }

            });



        },
    }

</script>


<style>


    @keyframes example {
      from {top: 0;}
      to {top: 60px;}
    }

/*
    .transform {
      -webkit-transition: all 2s ease;  
      -moz-transition: all 2s ease;  
      -o-transition: all 2s ease;  
      -ms-transition: all 2s ease;  
      transition: all 2s ease;
    }*/

    .marginTop {
/*        position: fixed;
        top: 60px;*/
        position: fixed;
        animation-name: example;
        animation-duration: 0.5s;
        animation-fill-mode: forwards;

    }

    .focused {
        background: #22A39F;
        color: #FFFFFF;
    }


/*
    quand click

            slide vers le truc

            +

                affectation de telle class 




*/


</style>