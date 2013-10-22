 <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/start/jquery-ui.css" type="text/css" media="all" />
 <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/redmond/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<div>
<div id="view_dialog"></div>
    <script>
$(function()
{
    var $dialog = $("#view_dialog").dialog(
        {
            autoOpen: false,
            title: 'parking place',
            height: 600,
            width: 600,
            resizable: true,
            modal: true,
            buttons:
            {
                "Ok": function()
                {
                    $(this).dialog("close");
                }
            }
        });
    $(".view_dialog").click(function()
    {
        $dialog.load($(this).attr('href'), function ()
                {
                    $dialog.dialog('open');
                });
        return false;
    });
});
</script>
<p style="float:left; font-size:30px;	text-align:left;">
<?php echo $this->Html->link('Sony World',array('controller'=>'tests', 'action'=>'parking1'), array('class' => 'view_dialog')); ?>
</p>
</div>
<div>
<div id="view_dialog1"></div>
    <script>
$(function()
{
    var $dialog1 = $("#view_dialog1").dialog(
        {
            autoOpen: false,
            title: 'parking place',
            height: 600,
            width: 600,
            resizable: true,
            modal: true,
            buttons:
            {
                "Ok": function()
                {
                    $(this).dialog("close");
                }
            }
        });
    $(".view_dialog1").click(function()
    {
        $dialog.load($(this).attr('href'), function ()
                {
                    $dialog.dialog1('open');
                });
        return false;
    });
});
</script>
<p style="float:right; font-size:30px;	text-align:center;">
<?php echo $this->Html->link('Sony World1',array('controller'=>'tests', 'action'=>'parking2'), array('class' => 'view_dialog')); ?>
</p>
</div>
<div>
<div id="view_dialog2"></div>
    <script>
$(function()
{
    var $dialog2 = $("#view_dialog2").dialog(
        {
            autoOpen: false,
            title: 'parking place',
            height: 600,
            width: 600,
            resizable: true,
            modal: true,
            buttons:
            {
                "Ok": function()
                {
                    $(this).dialog("close");
                }
            }
        });
    $(".view_dialog2").click(function()
    {
        $dialog.load($(this).attr('href'), function ()
                {
                    $dialog.dialog2('open');
                });
        return false;
    });
});
</script>
<p style="float:center; font-size:30px;	text-align:center;">
<?php echo $this->Html->link('sonyWorld2',array('controller'=>'tests', 'action'=>'parking3'), array('class' => 'view_dialog')); ?>
</p>
</div>

<div>
<div id="view_dialog3"></div>
    <script>
$(function()
{
    var $dialog3 = $("#view_dialog3").dialog(
        {
            autoOpen: false,
            title: 'parking place',
            height: 600,
            width: 600,
            resizable: true,
            modal: true,
            buttons:
            {
                "Ok": function()
                {
                    $(this).dialog3("close");
                }
            }
        });
    $(".view_dialog3").click(function()
    {
        $dialog.load($(this).attr('href'), function ()
                {
                    $dialog.dialog3('open');
                });
        return false;
    });
});
</script>
<p style="margin-top:250px; margin-bottom:0px; margin-left:500px; font-size:30px;">
<?php echo $this->Html->link('Sony World3',array('controller'=>'tests', 'action'=>'parking4'), array('class' => 'view_dialog')); ?></p>
</div>

<div>
<div id="view_dialog4"></div>
    <script>
$(function()
{
    var $dialog4 = $("#view_dialog4").dialog(
        {
            autoOpen: false,
            title: 'parking place',
            height: 600,
            width: 600,
            resizable: true,
            modal: true,
            buttons:
            {
                "Ok": function()
                {
                    $(this).dialog("close");
                }
            }
        });
    $(".view_dialog4").click(function()
    {
        $dialog.load($(this).attr('href'), function ()
                {
                    $dialog.dialog4('open');
                });
        return false;
    });
});
</script>
<p style="margin-top:0px; margin-bottom:40px; margin-left:0px; font-size:30px;">
<?php echo $this->Html->link('Sony World4',array('controller'=>'tests', 'action'=>'parking2'), array('class' => 'view_dialog')); ?>
</p>
</div>
<div>
<div id="view_dialog5"></div>
    <script>
$(function()
{
    var $dialog5 = $("#view_dialog5").dialog(
        {
            autoOpen: false,
            title: 'parking place',
            height: 600,
            width: 600,
            resizable: true,
            modal: true,
            buttons:
            {
                "Ok": function()
                {
                    $(this).dialog("close");
                }
            }
        });
    $(".view_dialog5").click(function()
    {
        $dialog.load($(this).attr('href'), function ()
                {
                    $dialog.dialog5('open');
                });
        return false;
    });
});
</script>
<p style="margin-top:-80px; margin-bottom:0px; margin-left:820px; font-size:30px;">
<?php echo $this->Html->link('sony World5',array('controller'=>'tests', 'action'=>'parking3'), array('class' => 'view_dialog')); ?>
</p>
</div>
