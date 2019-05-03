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
      </style>
</head>


<body>

        <script src="{{ URL::asset('/tinht/js/three.min.js') }}"></script>
        <script src="{{ URL::asset('/tinht/js/panolens.min.js') }}"></script>
        <script>

            var panorama, viewer;



            assetPath = '/uploads/topics/';

            topic = JSON.parse({!! json_encode($Topic->toArray()) !!});

            photo_file = '15568609885419.jpg';
            
            panorama = new PANOLENS.ImagePanorama(assetPath + photo_file);
            viewer = new PANOLENS.Viewer();
            viewer.add( panorama );
            
        </script>            

    
</body>
</html>