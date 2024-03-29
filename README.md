# spoiler-shortcode
This basic plugin creates a shortcode to use inline spoiler buttons in WordPress posts and pages.

1. Copy the `spoiler-shortcode` folder to your `wp-content/plugins`
2. Install the plugin
3. Use the shortcode in your page/post editor

It has opening and closing tags. Put your text between the tags, what you want to hide. You can set attributes:
- to change the "spoiler" text use "title"
- to change the hover tooltip "Click to show the content!" use "tooltip"

See below:

Lorem ipsum dolor sit amet, **[spoiler]consectetur adipiscing[/spoiler]** elit. Phasellus vitae tellus quis purus interdum aliquam. Integer dapibus diam vel felis bibendum, ut aliquam velit malesuada. Proin molestie mollis pretium. Aenean mollis malesuada convallis. **[spoiler title="Show text!" tooltip="Click me!"]Quisque eget dolor sed eros consectetur vehicula[/spoiler]** eget ac eros. 

![spoiler button wordpress](https://github.com/LioneAdri/spoiler-shortcode/blob/master/spoiler.png?raw=true)

Set the defaults:

- You can change colors, fonts, any other style attributes in the `css/spoiler.css` file
- You can set the default attributes of the shortcode in the `spoiler-shortcode.php` file:

```php
extract( shortcode_atts( array(
    'title' => 'spoiler', // here
    'tooltip' => 'Click to show the content!' // and here
), $attributes ) );
```
