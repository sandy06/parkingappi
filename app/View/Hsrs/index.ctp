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
<p style="float:left; font-size:30px;	text-align:center;">
<?php echo $this->Html->link('Hsr World',array('controller'=>'hsrs', 'action'=>'hs1'), array('class' => 'view_dialog')); ?>
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
<?php echo $this->Html->link('Hsr World1',array('controller'=>'hsrs', 'action'=>'hs2'), array('class' => 'view_dialog')); ?>
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
<p style="margin-top:250px; margin-bottom:0px; margin-left:855px; font-size:30px;">
<?php echo $this->Html->link('Hsr World2',array('controller'=>'hsrs', 'action'=>'hs3'), array('class' => 'view_dialog')); ?>
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
<p style="margin-top:-20px; margin-bottom:0px; margin-left:0px; font-size:30px;">
<?php echo $this->Html->link('Hsr World3',array('controller'=>'hsrs', 'action'=>'hs4'), array('class' => 'view_dialog')); ?>
</div>