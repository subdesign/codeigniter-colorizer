# Codeigniter Colorizer

Simply fun library for colorizing text input. This is a raw version, further functionalities planned.

---

## Usage

First, put the Ci_colorizer.php into you application/libraries folder

Second, load the library:

    $this->load->library('ci_colorizer');

Then call the library colorize methor with your text string parameter:

    $this->ci_colorizer->colorize('..your text here..');

If you want to specify what colors do you want to use with, give a 2nd parameter (offical HTML color names needed):

    $this->ci_colorizer->colorize('..your text here..', 'Green, Blue, Maroon');

List of offical [HTML color names](http://www.w3schools.com/html/html_colornames.asp/) 

## Notes

*    You can extend the $constant_colos array with more HTML color names