<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Paragrafo:</h2>
    <p>
        <?php
        $paragraph = 'Lorem ipsum dolor sit amet, consectetuer dolor elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, dolor eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet dolor, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis dolor, justo. Nullam dictum felis eu dolor mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate dolor tellus. dolor leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. dolor vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum dolor, augue dolor cursus nunc,';
        echo $paragraph;
        ?>
    </p>
    <h3>Lunghezza paragrafo: <?php echo strlen($paragraph); ?></h3>
    <?php
    $censored_word = $_GET['word'];
    $new_paragraph = str_replace($censored_word, '***', $paragraph);
    ?>

    <h2>Nuovo paragrafo censurato:</h2>
    <p>
        <?php
        echo $new_paragraph;
        ?>
    </p>
    <div>La nuova lunghezza è: <?php echo strlen($new_paragraph); ?></div>
</body>
</html>