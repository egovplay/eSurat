function login(){	$('#x-dialog').dialog({		title:'Please Login',		cache: false,  		href: 'login.php',		resizable:false,		closable:false,		width:340,		modal: true,		height:150,		buttons:[{			text:'Login',			iconCls:'icon-save',			handler:function (){											var isi = $('form#fm').serialize();				$.post( 'auth.php', isi)						.done(function(data) {						if(data)						{							var e = $.parseJSON(data);							if (e.success)							{								location.reload();							}							else							{								$.messager.show({									title:e.title,									msg:e.msg,									showType:'slide'								});							}						}						else						{							$.messager.show({									title:'Gagal Login',									msg:'error unknown',									showType:'slide'								});						}						});			}									},{			text:'Reset',			iconCls:'icon-cancel',			handler:function(){				$('form#fm')[0].reset();				$('input#hh').focus();			}		}]	});}function getmenu(){	}

