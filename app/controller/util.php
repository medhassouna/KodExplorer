<?php define('��', '��');������������؅�����������В��鼏֨���ʡ���𙇝���깓�������͌䥴𝟻����ɥ����Ư������ճ���ѫ��緈����ĵ���љ�������韕�;$_SERVER[��] = explode('|$|-|5', 'KOD_GROUP_PATH|$|-|5{groupPath}|$|-|5KOD_GROUP_SHARE|$|-|5{groupShare}|$|-|5KOD_USER_SELF|$|-|5{userSelf}|$|-|5KOD_USER_SHARE|$|-|5{userShare}|$|-|5KOD_USER_RECYCLE|$|-|5{userRecycle}|$|-|5KOD_USER_FAV|$|-|5{userFav}|$|-|5KOD_GROUP_ROOT_SELF|$|-|5{treeGroupSelf}|$|-|5KOD_GROUP_ROOT_ALL|$|-|5{treeGroupAll}|$|-|5\\|$|-|5/|$|-|5/\\/+/|$|-|5isRoot|$|-|5/../|$|-|5../|$|-|5kodPathType|$|-|5|$|-|5kodPathPre|$|-|5kodPathId|$|-|5kodPathIdShare|$|-|5:|$|-|5share/|$|-|5kodUser|$|-|5userID|$|-|5config|$|-|5pathRoleGroupDefault|$|-|51|$|-|5actions|$|-|5kodShareInfo|$|-|5path|$|-|5role|$|-|5type|$|-|5file|$|-|5fileList|$|-|5folderList|$|-|5share|$|-|5//|$|-|5.cache_data|$|-|5group_not_exist|$|-|5kodPathAuthCheck|$|-|5no_permission_group|$|-|5pathRoleGroup|$|-|5kodPathRoleGroupAuth|$|-|5.|$|-|5no_permission_action|$|-|5pathRoleDefine|$|-|5editor.fileSave|$|-|5auth|$|-|5kodBeforePathId|$|-|5in|$|-|5user|$|-|5size|$|-|5beforePathType|$|-|5uploadFileBefore|$|-|5space_size_use_check|$|-|5uploadFileAfter|$|-|5spaceSizeChange|$|-|5explorer.serverDownloadBefore|$|-|5explorer.unzipBefore|$|-|5explorer.zipBefore|$|-|5explorer.pathCopy|$|-|5explorer.mkfileBefore|$|-|5explorer.mkdirBefore|$|-|5explorer.pathMove|$|-|5explorer.mkfileAfter|$|-|5explorer.pathCopyAfter|$|-|5explorer.unzipAfter|$|-|5explorer.serverDownloadAfter|$|-|5explorer.pathMoveBefore|$|-|5explorer.pathMoveBfter|$|-|5spaceSizeChange_move|$|-|5explorer.pathRemoveAfter|$|-|5space_size_use_reset|$|-|5accessToken|$|-|5access_token|$|-|5SaeStorage|$|-|5SAE_APPNAME|$|-|5SESSION_PATH_DEFAULT|$|-|5session.save_handler|$|-|5files|$|-|5HTTP_APPNAME|$|-|5kod|$|-|5服务器session写入失败! (session write error)<br/>|$|-|5请检查php.ini相关配置,查看磁盘是否已满,或咨询服务商。<br/><br/>|$|-|5session.save_path=|$|-|5<br/>|$|-|5session.save_handler=|$|-|5settingSystem|$|-|5systemPassword|$|-|5kodExplorer_|$|-|5accessToken error!');��ع�៣��̹�����焪��厷��������ڵ��ѭ�����������І�����������̍�«�ꮦ�ќ�������������¹ܐ����ڈ݉�����������д�ɜ�ǜ�����׻���Ɛ���񪡹�틢�Կ��;
 define($_SERVER{��}[0],$_SERVER{��}{0x001});define($_SERVER{��}[0x0002],$_SERVER{��}{0x00003});define($_SERVER{��}[0x000004],$_SERVER{��}{0x05});define($_SERVER{��}[0x006],$_SERVER{��}{0x0007});define($_SERVER{��}[0x00008],$_SERVER{��}{0x000009});define($_SERVER{��}[0x0a],$_SERVER{��}{0x00b});define($_SERVER{��}[0x000c],$_SERVER{��}{0x0000d});define($_SERVER{��}[0x00000e],$_SERVER{��}{0x0f});function _DIR_CLEAR($���){$��=&$_SERVER{��};$���=str_replace($��[0x0010],$��{0x00011},trim($���));���䴣������ձ��芳����������Ā�μ���앝�������ڪ������켰��;$���=preg_replace($��[0x000012],$��{0x00011},$���);$�=$���;if(isset($GLOBALS[$��{0x0000013}])&& $GLOBALS[$��{0x0000013}]){return $���;}$�=$��[0x014];if(substr($���,0,0x00003)==$��{0x0015}){$���=substr($���,0x00003);}while(strstr($���,$�)){$���=str_replace($�,$��{0x00011},$���);}$���=preg_replace($��[0x000012],$��{0x00011},$���);return $���;}function _DIR($�){$����=&$_SERVER{��};$��ƫ=_DIR_CLEAR($�);$��ƫ=iconv_system($��ƫ);�����̒��Ë�Ć���;$�ۿ��=array(KOD_GROUP_PATH,KOD_GROUP_SHARE,KOD_USER_SELF,KOD_GROUP_ROOT_SELF,KOD_GROUP_ROOT_ALL,KOD_USER_SHARE,KOD_USER_RECYCLE,KOD_USER_FAV,);$GLOBALS[$����[0x00016]]=$����{0x000017};$GLOBALS[$����[0x0000018]]=HOME;�������ݭꫪ����켟ٟ���䩖��Ϯ�;$GLOBALS[$����{0x019}]=$����{0x000017};unset($GLOBALS[$����[0x001a]]);���å�;foreach($�ۿ�� as $�ڛȘ){if(substr($��ƫ,0,strlen($�ڛȘ))==$�ڛȘ){$GLOBALS[$����[0x00016]]=$�ڛȘ;$�=explode($����{0x00011},$��ƫ);$⥳=$�[0];unset($�[0]);$�����=implode($����{0x00011},$�);$��=explode($����{0x0001b},$⥳);if(count($��)>0x001){$GLOBALS[$����{0x019}]=trim($��[0x001]);}else{$GLOBALS[$����{0x019}]=$����{0x000017};}break;}}switch($GLOBALS[$����[0x00016]]){case $����{0x000017}:$��ƫ=iconv_system(HOME).$��ƫ;��ᑇ�������ӟ��ל�����������յ������򉨣�;break;���������ܼ�眚�ч���՗�Ƞ����ȵ���;case KOD_USER_RECYCLE:$GLOBALS[$����[0x0000018]]=trim(USER_RECYCLE,$����{0x00011});�����㚉��ۆ�􄦌���ܫ����χ����ף���̈ў��Ŋ;$GLOBALS[$����{0x019}]=$����{0x000017};���ݹƈ�����ɔ閇��ԟ;return iconv_system(USER_RECYCLE).$����{0x00011}.str_replace(KOD_USER_RECYCLE,$����{0x000017},$��ƫ);case KOD_USER_SELF:$GLOBALS[$����[0x0000018]]=trim(HOME_PATH,$����{0x00011});����;$GLOBALS[$����{0x019}]=$����{0x000017};���Ż��ݢ��ަ������ȶ�����������������ӷ������Ͱƴ��ö�����;return iconv_system(HOME_PATH).$����{0x00011}.str_replace(KOD_USER_SELF,$����{0x000017},$��ƫ);�ʔ��؄��;case KOD_USER_FAV:$GLOBALS[$����[0x0000018]]=trim(KOD_USER_FAV,$����{0x00011});��ǲ����Ѭ���������������Ĥ�����׉�ߘ���ы鳠���;$GLOBALS[$����{0x019}]=$����{0x000017};�����������Ǽ�;return KOD_USER_FAV;case KOD_GROUP_ROOT_SELF:$GLOBALS[$����[0x0000018]]=trim(KOD_GROUP_ROOT_SELF,$����{0x00011});��;$GLOBALS[$����{0x019}]=$����{0x000017};��������;return KOD_GROUP_ROOT_SELF;��岸Ӥ��׾��ĳ;case KOD_GROUP_ROOT_ALL:$GLOBALS[$����[0x0000018]]=trim(KOD_GROUP_ROOT_ALL,$����{0x00011});����џ��Ю����������̩錵���� �������;$GLOBALS[$����{0x019}]=$����{0x000017};return KOD_GROUP_ROOT_ALL;��;case KOD_GROUP_PATH:$����=systemGroup::getInfo($GLOBALS[$����{0x019}]);if(!$GLOBALS[$����{0x019}]|| !$����)return !1;owner_group_check($GLOBALS[$����{0x019}]);����š�䁿��待����Ǖ�����ܪ;$GLOBALS[$����[0x0000018]]=group_home_path($����);$��ƫ=iconv_system($GLOBALS[$����[0x0000018]]).$�����;break;����������������;case KOD_GROUP_SHARE:$����=systemGroup::getInfo($GLOBALS[$����{0x019}]);�ج�����������;if(!$GLOBALS[$����{0x019}]|| !$����)return !1;owner_group_check($GLOBALS[$����{0x019}]);����٠���;$GLOBALS[$����[0x0000018]]=group_home_path($����).$����[0x00001c];$��ƫ=iconv_system($GLOBALS[$����[0x0000018]]).$�����;�����縬⩨��á���٘���;break;case KOD_USER_SHARE:$����=systemMember::getInfo($GLOBALS[$����{0x019}]);if(!$GLOBALS[$����{0x019}]|| !$����)return !1;if($GLOBALS[$����{0x019}]!=$_SESSION[$����{0x000001d}][$����[0x01e]]){$��=$GLOBALS[$����{0x001f}][$����[0x00020]][$����{0x000021}][$����[0x0000022]];path_role_check($��);}$GLOBALS[$����[0x0000018]]=$����{0x000017};$GLOBALS[$����[0x001a]]=$�;if($�����==$����{0x000017}){return $��ƫ;}else{$���=explode($����{0x00011},$�����);$���[0]=iconv_app($���[0]);$�ٜ�=systemMember::userShareGet($GLOBALS[$����{0x019}],$���[0]);$GLOBALS[$����{0x023}]=$�ٜ�;$GLOBALS[$����[0x001a]]=KOD_USER_SHARE.$����{0x0001b}.$GLOBALS[$����{0x019}].$����{0x00011}.$���[0].$����{0x00011};unset($���[0]);if(!$�ٜ�)return !1;$Ƨ�=rtrim($�ٜ�[$����[0x0024]],$����{0x00011}).$����{0x00011}.iconv_app(implode($����{0x00011},$���));if($����[$����{0x00025}]!=$����{0x000021}){$���ڡ=user_home_path($����);$GLOBALS[$����[0x0000018]]=$���ڡ.rtrim($�ٜ�[$����[0x0024]],$����{0x00011}).$����{0x00011};$��ƫ=$���ڡ.$Ƨ�;}else{$GLOBALS[$����[0x0000018]]=$�ٜ�[$����[0x0024]];$��ƫ=$Ƨ�;}if($�ٜ�[$����[0x000026]]==$����{0x0000027}){$GLOBALS[$����[0x001a]]=rtrim($GLOBALS[$����[0x001a]],$����{0x00011});$GLOBALS[$����[0x0000018]]=rtrim($GLOBALS[$����[0x0000018]],$����{0x00011});}$��ƫ=iconv_system($��ƫ);}break;���;default:break;}if($��ƫ!=$����{0x00011}){$��ƫ=rtrim($��ƫ,$����{0x00011});if(is_dir($��ƫ))$��ƫ=$��ƫ.$����{0x00011};}return $��ƫ;��������ƾ�����ŭ;}function _DIR_OUT($�){$����=&$_SERVER{��};if(is_array($�)){foreach($�[$����[0x028]] as $�=>&$����){$����[$����[0x0024]]=preClear($����[$����[0x0024]]);}foreach($�[$����{0x0029}] as $�=>&$����){$����[$����[0x0024]]=preClear(rtrim($����[$����[0x0024]],$����{0x00011}).$����{0x00011});}}else{$�=preClear($�);}return $�;}function preClear($����){$��=&$_SERVER{��};$����=$GLOBALS[$��[0x00016]];$��=rtrim($GLOBALS[$��[0x0000018]],$��{0x00011});����䣠�Κ�;$��=array(KOD_USER_FAV,KOD_GROUP_ROOT_SELF,KOD_GROUP_ROOT_ALL);�������ǵ����ڞ��;if(isset($GLOBALS[$��[0x00016]])&& in_array($GLOBALS[$��[0x00016]],$��)){return $����;}if(ST==$��[0x0002a]){return str_replace($��,$��{0x000017},$����);}if($GLOBALS[$��{0x019}]!=$��{0x000017}){$����.=$��{0x0001b}.$GLOBALS[$��{0x019}].$��{0x00011};}if(isset($GLOBALS[$��[0x001a]])){$����=$GLOBALS[$��[0x001a]];}$��=$����.str_replace($��,$��{0x000017},$����);$��=str_replace($��{0x00002b},$��{0x00011},$��);����␚�������߾�Ɗ����ٶ����ٖ���������;return $��;��������������畯¬İ�������޸���������рȺ�����;}include(CLASS_DIR.$_SERVER{��}[0x000002c]);function owner_group_check($ŷ��){$��=&$_SERVER{��};if(!$ŷ��)show_json(LNG($��{0x02d}).$ŷ��,!1);if($GLOBALS[$��{0x0000013}]||(isset($GLOBALS[$��[0x002e]])&& $GLOBALS[$��[0x002e]]===!0)){return;}$ї���=systemMember::userAuthGroup($ŷ��);if($ї���==!1){if($GLOBALS[$��[0x00016]]==KOD_GROUP_PATH){show_json(LNG($��{0x0002f}),!1);}else if($GLOBALS[$��[0x00016]]==KOD_GROUP_SHARE){$��=$GLOBALS[$��{0x001f}][$��[0x00020]][$��{0x000021}];}}else{$��=$GLOBALS[$��{0x001f}][$��[0x000030]][$ї���];��ԑ��̴�������ن�����ՠ����ٔ����э�����;}path_role_check($��[$��[0x0000022]]);�Ț�ϫ�ǎ��ϣ������������;}function path_role_check($�Æ){$���=&$_SERVER{��};if($GLOBALS[$���{0x0000013}]||(isset($GLOBALS[$���[0x002e]])&& $GLOBALS[$���[0x002e]]===!0)){return;}$���=role_permission_arr($�Æ);$GLOBALS[$���{0x0000031}]=$���;if(!isset($���[ST.$���[0x032].ACT])&& ST!=$���[0x0002a]){show_json(LNG($���{0x0033}),!1);}}function role_permission_arr($���ہ){$����=&$_SERVER{��};$�=array();���������،�������������������ĸ�;$�=$GLOBALS[$����{0x001f}][$����[0x00034]];���濩�֊����;foreach($���ہ as $����=>$�߅){if(!$�߅)continue;$�=explode($����{0x0001b},$����);if(count($�)==0x0002&& is_array($�[$�[0]])&& is_array($�[$�[0]][$�[0x001]])){$�=array_merge($�,$�[$�[0]][$�[0x001]]);}}$�=array();foreach($� as $�߅){$�[$�߅]=$����{0x000021};��ޝ����������;}return $�;}function check_file_writable_user($�){$����=&$_SERVER{��};if(!isset($GLOBALS[$����[0x00016]])){_DIR($�);}$Θ��=$����{0x000035};if($GLOBALS[$����{0x0000013}])return @is_writable($�);if($GLOBALS[$����[0x0000036]][$Θ��]!=$����{0x000021}){return !1;}if($GLOBALS[$����[0x00016]]==KOD_GROUP_PATH&& is_array($GLOBALS[$����{0x0000031}])&& $GLOBALS[$����{0x0000031}][$Θ��]==$����{0x000021}){return !0;}if($GLOBALS[$����[0x00016]]==$����{0x000017} || $GLOBALS[$����[0x00016]]==KOD_USER_SELF){return !0;}return !1;}function space_size_use_check(){$����=&$_SERVER{��};if(!system_space())return;if($GLOBALS[$����{0x0000013}]==0x001)return;if(isset($GLOBALS[$����{0x037}])&& isset($GLOBALS[$����{0x019}])&& $GLOBALS[$����{0x037}]==$GLOBALS[$����{0x019}]){return;}if($GLOBALS[$����[0x00016]]==KOD_GROUP_SHARE|| $GLOBALS[$����[0x00016]]==KOD_GROUP_PATH){systemGroup::spaceCheck($GLOBALS[$����{0x019}]);}else{if(ST==$����[0x0002a]){$����=$GLOBALS[$����[0x0038]][$����{0x00039}];}else{$����=$_SESSION[$����{0x000001d}][$����[0x01e]];}systemMember::spaceCheck($����);}}function spaceSizeChange($�哏,$��=true,$��ъ�=false,$��=false){$��=&$_SERVER{��};if(!system_space())return;if($��ъ�===!1){$��ъ�=$GLOBALS[$��[0x00016]];$��=$GLOBALS[$��{0x019}];}$��=$��?0x001:-0x001;if(is_file($�哏)){$ָԵ�=get_filesize($�哏);}else if(is_dir($�哏)){$���=_path_info_more($�哏);$ָԵ�=$���[$��[0x00003a]];}else{return;}if($��ъ�==KOD_GROUP_SHARE|| $��ъ�==KOD_GROUP_PATH){systemGroup::spaceChange($��,$ָԵ�*$��);}else{if(ST==$��[0x0002a]){$֪=$GLOBALS[$��[0x0038]][$��{0x00039}];}else{$֪=$_SESSION[$��{0x000001d}][$��[0x01e]];}systemMember::spaceChange($֪,$ָԵ�*$��);}}function spaceSizeChange_move($�){$��ğ=&$_SERVER{��};if(isset($GLOBALS[$��ğ{0x037}])&& isset($GLOBALS[$��ğ{0x019}])){if($GLOBALS[$��ğ{0x037}]==$GLOBALS[$��ğ{0x019}]){return;}else{spaceSizeChange($�);spaceSizeChange($�,!1,$GLOBALS[$��ğ{0x000003b}],$GLOBALS[$��ğ{0x037}]);}}else{spaceSizeChange($�);�ީ����Ħ������ł����̪��뮙ލÍӿř�������;}}function space_size_use_reset(){$����=&$_SERVER{��};if(!system_space())return;$囜=isset($GLOBALS[$����[0x00016]])?$GLOBALS[$����[0x00016]]:$����{0x000017};$ܓ�=isset($GLOBALS[$����{0x019}])?$GLOBALS[$����{0x019}]:$����{0x000017};if($囜==KOD_GROUP_SHARE|| $囜==KOD_GROUP_PATH){systemGroup::spaceChange($ܓ�);}else{$��=$_SESSION[$����{0x000001d}][$����[0x01e]];systemMember::spaceChange($��);}}function init_space_size_hook(){$���=&$_SERVER{��};Hook::bind($���[0x03c],$���{0x003d});Hook::bind($���[0x0003e],$���{0x00003f});����ʤ�;Hook::bind($���[0x0000040],$���{0x003d});Hook::bind($���{0x041},$���{0x003d});��ǩ���ٰ���܌�������͞��Õ�����ʐ����;Hook::bind($���[0x0042],$���{0x003d});�����֦���������������«��;Hook::bind($���{0x00043},$���{0x003d});���������欦��߅�������;Hook::bind($���[0x000044],$���{0x003d});��������褦Ǣ�;Hook::bind($���{0x0000045},$���{0x003d});Hook::bind($���[0x046],$���{0x003d});���ٹ�ֺ���̅����ڱ��������̸琉����������Ϧ�����;Hook::bind($���{0x0047},$���{0x00003f});�������������Ҡ��鑐�;Hook::bind($���[0x00048],$���{0x00003f});Hook::bind($���{0x000049},$���{0x00003f});��������ї���ő���厼���𵗪팦��������������ؼ���ϗ�;Hook::bind($���[0x000004a],$���{0x00003f});��������;Hook::bind($���{0x04b},$���{0x003d});�㋸��ŏ��̌�������˔슒���Ƴ�����녃�����А��և飜֮����Ú�鳉Ǡ��Ӥȥ�;Hook::bind($���[0x004c],$���{0x0004d});��������թ��Å��;Hook::bind($���[0x00004e],$���{0x000004f});}function init_session(){$���=&$_SERVER{��};if(isset($_GET[$���[0x050]])){access_token_check($_GET[$���[0x050]]);}else if(isset($_GET[$���{0x0051}])){access_token_check($_GET[$���{0x0051}]);}else{@session_name(SESSION_ID);}$�ߒȲ=@session_save_path();if(class_exists($���[0x00052])|| defined($���{0x000053})|| defined($���[0x0000054])|| @ini_get($���{0x055})!=$���[0x0056] || isset($_SERVER[$���{0x00057}])){}else{chmod_path(KOD_SESSION,0777);@session_save_path(KOD_SESSION);}@session_start();$_SESSION[$���[0x000058]]=0x001;@session_write_close();�о����������;unset($_SESSION);�����Ғͳ��;@session_start();�����������Ӫ���Ƣ�쮪��ݤ��Ҏߢ׹������;if(!$_SESSION[$���[0x000058]]){@session_save_path($�ߒȲ);@session_start();$_SESSION[$���[0x000058]]=0x001;@session_write_close();unset($_SESSION);@session_start();}if(!$_SESSION[$���[0x000058]]){show_tips($���{0x0000059}.$���[0x05a].$���{0x005b}.$�ߒȲ.$���[0x0005c].$���{0x00005d}.@ini_get($���{0x055}).$���[0x0005c]);}}function access_token_check($���){$Ɛ�=&$_SERVER{��};$��=$GLOBALS[$Ɛ�{0x001f}][$Ɛ�[0x000005e]][$Ɛ�{0x05f}];���߮�펉�Ȟ����;$��=substr(md5($Ɛ�[0x0060].$��),0,0x0f);$����=Mcrypt::decode($���,$��);������ì�֍޽�����������ڪ������������ɒԨ�ϗ�����ǅ��𮡮�;if(!$����){show_tips($Ɛ�{0x00061});}session_id($����);}function access_token_get(){$�=&$_SERVER{��};$��=session_id();$���=$GLOBALS[$�{0x001f}][$�[0x000005e]][$�{0x05f}];$���=substr(md5($�[0x0060].$���),0,0x0f);$��=Mcrypt::encode($��,$���,0x0e10*0x0000018);return $��;}function init_config(){init_setting();init_session();�˴��;init_space_size_hook();����Ž������ӟ�;}