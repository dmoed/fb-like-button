#FB Like Button
==================
This Bolt extension automatically adds the code snippets of the Facebook Like Button plugins on your site.

## Installation:

```  
composer require dmoed/fb-like-button
```

## Setup: 

In the Bolt Backend, navigate to Maintenance -> Extensions. 
Locate 'FB Likes Button Widget' and click the 'configuration' button.
Enter your Facebook page URL in the config file.

For more information: [Facebook Like Button](https://developers.facebook.com/docs/plugins/like-button).

Lastly enter the following code to your frontend template

``` 
{{ widgets('footer') }}
```


###Changelog

#### 0.1.1

* initial files