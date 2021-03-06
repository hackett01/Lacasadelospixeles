<?php /* Template Name: new-fashion */ ?>
<?php get_header(); ?>
<div class="ych-menu-content">        
    <div id="portafolio-newfashion">

        <?php if (have_rows('background')): ?>
            <?php
            while (have_rows('background')): the_row();
                $image = get_sub_field('imagen_fondo');
                $image_frontal = get_sub_field('logo_principal');
                $content = get_sub_field('texto_contenido');
                $link = get_sub_field('link');
                ?>
                <?php if ($link): ?>
                <?php endif; ?>
                <div class="header-portafolio cover-bg text-center" style="background-image: url('<?php echo $image['url']; ?>')">
                    <div class="middle-content"> 
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <img src="<?php echo $image_frontal['url']; ?>" alt="New Fashion" class="img-responsive center-block wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">   
                                    <p style="margin-top: 30px" class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s"><?php echo $content; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
                <?php if ($link): ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="colores">
            <div class="position-macbook wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">  
                <div class=" vertical-middle-content macbook-container">
                    <div class="screen">
                        <?php
                        $image = get_field('imagen_macbook');
                        if (!empty($image)):
                            ?>
                            <img class="wow fadeIn"  data-wow-duration="3s" data-wow-delay=".6s" src="<?php echo $image['url']; ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <ul class="pieID legend">
                        <li>
                            <span>75</span>
                        </li>
                        <li>
                            <span>12.5</span>
                        </li>
                        <li>
                            <span>12.5</span>
                        </li>
                    </ul>
                    <div class="col-sm-4 text-center">
                        <div class="pieID pie first"></div>
                        <h5>Pantone Neutral Black C</h5>
                        <p>CMYK:	<span>94, 77, 53, 94</span><br>
                            RGB:	<span>34, 34, 35</span><br>
                            HEX:	<span>#222223</span></p>
                    </div>
                    <div class=" col-sm-4 text-center">
                        <div class="pieID pie second"></div>
                        <h5>Pantone 7635 C</h5>
                        <p>CMYK:	<span>0, 73, 50, 22</span><br>
                            RGB:	<span>198, 54, 99</span><br>
                            HEX:	<span>#c63663</span></p>
                    </div>
                    <div class=" col-sm-4 text-center">
                        <div class="pieID pie third"></div>
                        <h5>Pantone 7508 C</h5>
                        <p>CMYK:	<span>2, 19, 46, 4</span><br>
                            RGB:	<span>225, 184, 127</span><br>
                            HEX:	<span>#e1b87f</span></p>
                    </div>
                </div>
            </div>
        </div><!-- Colores-->








        <?php if (have_rows('titulo_tipografia')): ?>
            <?php
            while (have_rows('titulo_tipografia')): the_row();

                // vars
                $image = get_sub_field('imagen_fondo');
                $content = get_sub_field('titulo_tipografia');
                $link = get_sub_field('link');
                ?>
                <?php if ($link): ?>

                <?php endif; ?>
                <div class="tipografia cover-bg" style="background-image: url('<?php echo $image['url']; ?>')" >
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="wow fadeIn title"><?php echo $content; ?></h2>
                            </div> 
                            <div class="col-md-6 col-sm-12">
                                <div class="item-tipografia raleway bold wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                                    <h4><?php the_field('titulo_tipografia_bold'); ?></h4>
                                    <?php if (have_rows('lista_de_tipografias_bold')): ?>
                                        <?php
                                        while (have_rows('lista_de_tipografias_bold')): the_row();
                                            $content = get_sub_field('texto');
                                            ?>
                                            <?php if ($link): ?>
                                            <?php endif; ?>
                                            <?php if ($link): ?>
                                                </a>
                                            <?php endif; ?>
                                            <span ><?php echo $content; ?></span>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div> 
                            </div>
                            <div class="col-sm-12 col-md-6"> 
                                <div class="item-tipografia raleway wow fadeIn" data-wow-duration="1s" data-wow-delay=".8s">
                                    <h4><?php the_field('titulo_tipografia_salt'); ?></h4>
                                    <?php if (have_rows('lista_de_tipografias_s')): ?>
                                        <?php
                                        while (have_rows('lista_de_tipografias_s')): the_row();
                                            $content = get_sub_field('texto');
                                            ?>
                                            <?php if ($link): ?>
                                            <?php endif; ?>
                                            <?php if ($link): ?>
                                                </a>
                                            <?php endif; ?>
                                            <span ><?php echo $content; ?></span>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Tipografia-->
                <?php if ($link): ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="vista-movil">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-right"> 
                         <h2><?php the_field('titulp_movil_imagen'); ?></h2>
                    </div>
                    <div class="position-iphone left wow fadeIn">  
                          <?php if (have_rows('imagenes_veticales')): ?>
                            <?php
                            while (have_rows('imagenes_veticales')): the_row();
                                $image = get_sub_field('imagen');
                                $content = get_sub_field('id_imagen');
                                ?>
                                <?php if ($link): ?>
                                <?php endif; ?>
                                <div class="iphone-container   <?php echo $content; ?>">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                </div>
                                <?php if ($link): ?>
                                <?php endif; ?>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div><!-- Vista Movil-->
        <div class="vista-desktop">
            <div class="container">
                <div class="col-sm-6 col-sm-offset-6 wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s"> 
                    <h3 class="text-center"><?php the_field('titulo_version'); ?></h3>  
                </div>
                <div class="col-sm-6 col-sm-offset-6  wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s"> 
                    <p><?php the_field('texto_de_contenido_version'); ?></p>
                </div>
                <div class="position-imac wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".1s">  
                    <div class="imac-container">
                        <div class="screen">
                            <?php
                            $image = get_field('screenshot');

                            if (!empty($image)):
                                ?>

                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <img class="wow fadeIn"  data-wow-duration="3s" data-wow-delay=".6s" src="../img/portafolio/schaebens/schaebens-screenshot.jpg">
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-6">
                    <div class="tecnologias">
                        <?php if (have_rows('nuestro_trabajo_galeria')): ?>
                            <?php
                            while (have_rows('nuestro_trabajo_galeria')): the_row();
                                $image = get_sub_field('imagen');
                                $content = get_sub_field('content');
                                $link = get_sub_field('link');
                                ?>
                                <?php if ($link): ?>
                                <?php endif; ?>
                                <img class="img-responsive wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                <?php if ($link): ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <a href="http://schaebens.com.mx/" class="emerald-btn wow fadeIn" target="_blank" data-wow-duration="1s" data-wow-delay="1s">Visitar su sitio</a>
                </div>
            </div>

        </div><!-- Desktop -->
        <div class="nuestro-trabajo">
            <div class="container">
                <div class="things-we-did">
              
                     <?php if (have_rows('nuestro_trabajo')): ?>
                        <?php
                        while (have_rows('nuestro_trabajo')): the_row();
                            $image = get_sub_field('imagen');
                            $content = get_sub_field('texto');
                            $link = get_sub_field('link');
                            ?>
                            <?php if ($link): ?>
                            <?php endif; ?>
                            <div class="wow fadeIn">
                                <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                <h5> <?php echo $content; ?></h5>
                            </div>
                            <?php if ($link): ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div><!-- Nuestro Trabajo -->
    </div>
   
    <div id="portafolio" class="container-fluid only-two">
        <div class="portafolio-titulo wow fadeIn">
            <h2><?php the_field('titulo_portafolio'); ?></h2>
        </div>
        <div class="row">
            <?php if (have_rows('portafolio')): ?>
                <?php
                while (have_rows('portafolio')): the_row();
                    $image = get_sub_field('imagen_fondo');
                    $imagen_frontal = get_sub_field('imagen_frontal');
                    $texto = get_sub_field('texto');
                    $link = get_sub_field('link');
                    ?>
                    <?php if ($link): ?>
                    <?php endif; ?>
                    <div class="col-sm-6 no-padd wow fadeIn" data-wow-delay="0.5s">
                        <a href="<?php echo $link; ?>">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                            <div class="overlay">
                                <div class="o-content">
                                    <div class="outer">
                                        <div class="inner">
                                            <img src="<?php echo $imagen_frontal['url']; ?>" alt="<?php echo $imagen_frontal['alt'] ?>" />
                                            <span>   <?php echo $content; ?></span>  
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </a>
                    </div>
                    <?php if ($link): ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
    
    
   <div id="contactanos">
        <div class="container ">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <h1 class="wow fadeIn" data-wow-duration="2s"><?php the_field('titulo_proyecto'); ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <p class="wow fadeIn" data-wow-duration="2s"><?php the_field('texto_contenido_proyecto'); ?></p>
                </div>
            </div>
            <a href="../contacto" class="emerald-btn wow fadeIn" data-wow-duration="2s">iniciar proyecto</a>
        </div>
    </div>

    <!-- Footer -->

    <!-- Footer -->
    <button class="go-up"><i class="lcp-icon lcp-up-angle"></i></button>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    function sliceSize(dataNum, dataTotal) {
        return (dataNum / dataTotal) * 360;
    }
    function addSlice(sliceSize, pieElement, offset, sliceID, color) {
        $(pieElement).append("<div class='slice " + sliceID + "'><span></span></div>");
        var offset = offset - 1;
        var sizeRotation = -179 + sliceSize;
        $("." + sliceID).css({
            "transform": "rotate(" + offset + "deg) translate3d(0,0,0)"
        });
        $("." + sliceID + " span").css({
            "transform": "rotate(" + sizeRotation + "deg) translate3d(0,0,0)",
            "background-color": color
        });
    }
    function iterateSlices(sliceSize, pieElement, offset, dataCount, sliceCount, color) {
        var sliceID = "s" + dataCount + "-" + sliceCount;
        var maxSize = 179;
        if (sliceSize <= maxSize) {
            addSlice(sliceSize, pieElement, offset, sliceID, color);
        } else {
            addSlice(maxSize, pieElement, offset, sliceID, color);
            iterateSlices(sliceSize - maxSize, pieElement, offset + maxSize, dataCount, sliceCount + 1, color);
        }
    }
    function createPie(dataElement, pieElement) {
        var listData = [];
        $(dataElement + " span").each(function () {
            listData.push(Number($(this).html()));
        });
        var listTotal = 0;
        for (var i = 0; i < listData.length; i++) {
            listTotal += listData[i];
        }
        var offset = 0;
        var color = [
            "cornflowerblue",
            "olivedrab",
            "orange",
            "tomato",
            "crimson",
            "purple",
            "turquoise",
            "forestgreen",
            "navy",
            "gray"
        ];
        for (var i = 0; i < listData.length; i++) {
            var size = sliceSize(listData[i], listTotal);
            iterateSlices(size, pieElement, offset, i, 0, color[i]);
            $(dataElement + " li:nth-child(" + (i + 1) + ")").css("border-color", color[i]);
            offset += size;
        }
    }
    createPie(".pieID.legend", ".pieID.pie");

    $(function () {
        $('.estadisticas').waypoint(function () {
            var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
            $('.dollars').animateNumber(
                    {
                        number: 45400,
                        numberStep: comma_separator_number_step
                    },
                    6000
                    );
            var percent_number_step = $.animateNumber.numberStepFactories.append(' %')
            $('.percent').animateNumber(
                    {
                        number: 82,
                        numberStep: percent_number_step
                    },
                    6000
                    );
            $('.percentweb1').animateNumber(
                    {
                        number: 49,
                        numberStep: percent_number_step
                    },
                    6000
                    );
            $('.percentweb2').animateNumber(
                    {
                        number: 78,
                        numberStep: percent_number_step
                    },
                    6000
                    );
            $('.percentweb3').animateNumber(
                    {
                        number: 41,
                        numberStep: percent_number_step
                    },
                    6000
                    );

        }, {
            offset: '100%'
        });
    });

</script>

<?php get_footer(); ?>
