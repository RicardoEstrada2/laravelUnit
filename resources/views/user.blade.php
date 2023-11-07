<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
    @if($name && !$lastName)
        <h1>Hola {{ $name }} Doe</h1>
    @endif
    @if($lastName && $name)
        <h1>Hola {{ $name }} {{ $lastName }}</h1>
    @endif
    @if(!$name)
        <h1>Hola Invitado</h1>
    @endif
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat nisl eget turpis sollicitudin, sit amet scelerisque tellus malesuada. Suspendisse pulvinar a sapien mattis sagittis. Pellentesque eu sem dolor. Quisque tincidunt libero tortor, non rutrum leo viverra at. Mauris non fringilla lacus. Nunc hendrerit, enim in ornare accumsan, ex lorem vehicula mi, eget venenatis diam purus quis sem. Sed pulvinar lectus enim, id luctus ligula sollicitudin vel.</p>

    <p>Cras sed turpis sed ligula porttitor luctus quis vel nulla. Fusce lobortis mi sed egestas vehicula. Integer dapibus diam sit amet tortor posuere, ac pretium augue maximus. Nunc elit nulla, convallis sit amet tincidunt nec, sollicitudin a purus. Nam erat erat, consequat sed sapien quis, porttitor posuere velit. Vivamus eleifend, ligula sit amet mollis tristique, leo odio convallis nisl, ut malesuada nunc leo et diam. Phasellus luctus sapien justo, non mattis lorem euismod non. Sed eu porta nisl, ac tincidunt enim. Quisque iaculis commodo semper. Ut sodales, tortor consectetur porttitor condimentum, metus justo vehicula dui, a interdum purus elit in nunc.</p>
</body>
</html>
