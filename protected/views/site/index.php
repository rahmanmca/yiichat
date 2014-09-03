<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<?php if(Yii::app()->user->isGuest): ?>
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
<?php else: ?>
<h1>Chat</h1>
<div id='chat'></div>
<?php 
//Yii::import('application.components.ChatHandler');
$model = new ChatHandler();
//$model = new MyYiiChatHandler();
//echo '<pew>'.print_r($model, true).'</pre>'; exit;


    $this->widget('YiiChatWidget',array(
        'chat_id'=>rand(1, 1000),                   // a chat identificator
        'identity'=>Yii::app()->user->id,                      // the user, Yii::app()->user->id ?
        'selector'=>'#chat',                // were it will be inserted
        'minPostLen'=>1,                    // min and
        'maxPostLen'=>100,                   // max string size for post
        //'model'=>new MyYiiChatHandler(),    // the class handler. **** FOR DEMO, READ MORE LATER IN THIS DOC ****
		'model' => $model,
        'data'=>'any data',                 // data passed to the handler
        // success and error handlers, both optionals.
        'onSuccess'=>new CJavaScriptExpression(
            "function(code, text, post_id){   }"),
        'onError'=>new CJavaScriptExpression(
            "function(errorcode, info){  }"),
    ));
?>
<?php endif; ?>

