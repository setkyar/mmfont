# Mmfont

Simple package which converts zawgyi1 <=> unicode strings. I try to be on [packagist](https://packagist.org/packages/setkyar/mmfont), the codes come from [saturngod's Rabbit](https://github.com/saturngod/Rabbit)

## Installation

Create `composer.json` and add the following

    {
      "require" : {
        "setkyar/mmfont" : "dev-master"
      }
    }

And run `$ composer install` via your terminal

## Usage

Create new php file and add the following 

    <?php
    
     // Display Errors On
    ini_set('display_errors', 'On');
    
    $autoload = __DIR__.'/vendor/autoload.php';
    
    if ( ! file_exists($autoload))
    {
    	exit("Need to run \"composer install\"!");
    }
    
    require $autoload;
    
    
    use SetKyar\Mmfont\Mmfont;
    
    $mmfont = new Mmfont;
    
    echo "Unicode to  Zaw Gyi " . $mmfont->uni2zg1('မြန်မာစာ');
    echo "<br>";
    echo "Zaw Gyi to Unicode " . $mmfont->zg12uni('ျမန္မာစာ');


## Todo

- Write Test

## Credit

This is originally from [@saturngod's](https://github.com/saturngod) [Rabbit](https://github.com/saturngod/Rabbit/tree/gh-pages/other-lang/php). I just try to be on [packagist](https://packagist.org/)

## Contributing

1. Fork it ( https://github.com/setkyar/phpmmfont )
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create a new Pull Request

**Your star make me :smile: too, don't miss to gave it!**

## License
WTFPL