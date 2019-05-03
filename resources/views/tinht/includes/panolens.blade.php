<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">
    <title>Panolens.js panorama image panorama</title>
    <style>
        html, body {
          margin: 0;
          width: 100%;
          height: 100%;
          overflow: hidden;
          background-color: #000;
        }
  
        a:link, a:visited{
          color: #bdc3c7;
        }
  
        .credit{
          position: absolute;
          text-align: center;
          width: 100%;
          padding: 20px 0;
          color: #fff;
        }
      </style>
</head>


<body>

        <script src="{{ URL::asset('/tinht/js/three.min.js') }}"></script>
        <script src="{{ URL::asset('/tinht/js/panolens.min.js') }}"></script>
        <script>

            var panorama, viewer;



            assetPath = '';
            
            panorama = new PANOLENS.ImagePanorama('http://pchen66.github.io/Panolens/examples/asset/textures/equirectangular/view.jpg');
            
            viewer = new PANOLENS.Viewer();
            viewer.add( panorama );
            
        </script>            

    
</body>
</html>