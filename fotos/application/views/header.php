
<!DOCTYPE html>
<html lang="pt" class="block-menu">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Edson Moreira fotografias.">
        <meta name="keywords" content="Edson, Moreira, fotógrafo de casamentos, fotografias de casamento,ensaio fotográfico de casamento, Aurora, Ceará, precasamento, noivas, fotos de noivas, wenddingday, casamento na praia, litoral sul, fotografando casamentos, wedding photographer">
        <meta name="author" content="">
        <link rel="shortcut icon" type="image/png" href="img/logo.png" />      

        <title>Fot&oacute;grafo de casamentos e ensaios Aurora CE - Edson Moreira</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,400,700" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/'); ?>main.min.css?v=2.8.227" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/'); ?>bootstrap.min.css?v=2.8.227" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/'); ?>datepicker.min.css?v=2.8.227" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/'); ?>owl.carousel.min.css?v=2.8.227" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/'); ?>jquery.instashow.min.css?v=2.8.227">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/'); ?>animate.css?v=2.8.227" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/'); ?>main.min.css?v=2.8.227" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/'); ?>responsive.min.css?v=2.8.227" />

        <?php
        if (isset($album)) {
            foreach ($album as $data) {
                $imagem = $data->img1;
                $titulo = $data->nome_album;
            }
            ?>

            <meta property = "fb:app_id" content = "486372951748087" />
            <meta property = "og:title" content = "<?php echo $titulo; ?>" />
            <meta property = "og:image" content = "<?php echo base_url('assets/imgs/albuns/' . $imagem); ?>" />
            <meta property = "og:type" content = "article" />
            <meta property = "og:image:width" content = "476" />
            <meta property = "og:image:height" content = "249" />
        <?php } ?>



    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-63230122-4', 'auto', {'name': 'Alboom'});
        ga('Alboom.send', 'pageview');
        ga('create', 'UA-63230122-8', 'auto', {name: 'sites', allowLinker: true});
        ga('sites.require', 'linker');
        ga('sites.linker:autoLink', ['edsonmoreirafotografias.com.br']);
        ga('sites.send', 'pageview');
    </script>
    <script type="text/javascript">
        (function (r, e, a, l, _r, t, u) {
            r['RTUObject'] = _r;
            r[_r] = r[_r] || function () {
                (r[_r].q = r[_r].q || []).push(arguments);
                if (!!r[_r].t)
                    r[_r].t();
            }, r[_r].l = 1 * new Date();
            t = e.createElement(a), u = e.getElementsByTagName(a)[0];
            t.async = 1;
            t.src = l;
            u.parentNode.insertBefore(t, u)
        })
                (window, document, 'script', '//storage.alboom.ninja/rtu/rtu.min.js?2.8.227', 'rtu');
        rtu('mode', 'boom');
        rtu('hostname', 'edsonmoreirafotografias.com.br');
        rtu('pageview');
    </script>
</head>