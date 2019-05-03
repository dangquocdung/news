<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <script src="{{ URL::asset('/tinht/js/three.min.js') }}"></script>
        <script src="{{ URL::asset('/tinht/js/panolens.min.js') }}"></script>
        <script>

            var panorama, viewer;

            assetPath = 'http://pchen66.github.io/Panolens/examples/asset/textures/equirectangular';
            
            panorama = new PANOLENS.ImagePanorama( assetPath + '/view.jpg' );
            
            viewer = new PANOLENS.Viewer();
            viewer.add( panorama );
            
        </script>
    
</body>
</html>