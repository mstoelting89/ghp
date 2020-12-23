/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
define(["require","exports","jquery","TYPO3/CMS/Backend/Notification","TYPO3/CMS/Backend/Modal","TYPO3/CMS/Backend/Severity","TYPO3/CMS/Backend/Storage/Client"],(function(o,t,i,e,n,s,a){"use strict";var l;!function(o){o.loginrefresh="t3js-modal-loginrefresh",o.lockedModal="t3js-modal-backendlocked",o.loginFormModal="t3js-modal-backendloginform"}(l||(l={}));var r,d=function(){function t(){var o=this;this.options={modalConfig:{backdrop:"static"}},this.webNotification=null,this.intervalTime=60,this.intervalId=null,this.backendIsLocked=!1,this.isTimingOut=!1,this.$timeoutModal=null,this.$backendLockedModal=null,this.$loginForm=null,this.loginFramesetUrl="",this.logoutUrl="",this.submitForm=function(t){t.preventDefault();var n=o.$loginForm.find("form"),s=n.find("input[name=p_field]"),a=n.find("input[name=userident]"),l=s.val();if(""===l&&""===a.val())return e.error(TYPO3.lang["mess.refresh_login_failed"],TYPO3.lang["mess.refresh_login_emptyPassword"]),void s.focus();l&&(a.val(l),s.val(""));var r={login_status:"login"};i.each(n.serializeArray(),(function(o,t){r[t.name]=t.value})),i.ajax({url:n.attr("action"),method:"POST",data:r,success:function(t){t.login.success?o.hideLoginForm():(e.error(TYPO3.lang["mess.refresh_login_failed"],TYPO3.lang["mess.refresh_login_failed_message"]),s.focus())}})},this.checkActiveSession=function(){i.getJSON(TYPO3.settings.ajaxUrls.login_timedout,[],(function(t){t.login.locked?o.backendIsLocked||(o.backendIsLocked=!0,o.showBackendLockedModal()):o.backendIsLocked&&(o.backendIsLocked=!1,o.hideBackendLockedModal()),o.backendIsLocked||(t.login.timed_out||t.login.will_time_out)&&(t.login.timed_out?o.showLoginForm():o.showTimeoutModal())}))}}return t.prototype.initialize=function(){this.initializeTimeoutModal(),this.initializeBackendLockedModal(),this.initializeLoginForm(),this.startTask();var o=!(a.isset("notifications.asked")&&"yes"===a.get("notifications.asked")),t="undefined"!=typeof Notification&&"default"===Notification.permission;o&&"https:"===document.location.protocol&&t&&n.confirm(TYPO3.lang["notification.request.title"],TYPO3.lang["notification.request.description"],s.info,[{text:TYPO3.lang["button.yes"]||"Yes",btnClass:"btn-"+s.getCssClass(s.info),name:"ok",active:!0},{text:TYPO3.lang["button.no"]||"No",btnClass:"btn-"+s.getCssClass(s.notice),name:"cancel"}]).on("confirm.button.ok",(function(){Notification.requestPermission(),n.dismiss()})).on("confirm.button.cancel",(function(){n.dismiss()})).on("hide.bs.modal",(function(){a.set("notifications.asked","yes")}))},t.prototype.startTask=function(){if(null===this.intervalId){var o=1e3*this.intervalTime;this.intervalId=setInterval(this.checkActiveSession,o)}},t.prototype.stopTask=function(){clearInterval(this.intervalId),this.intervalId=null},t.prototype.setIntervalTime=function(o){this.intervalTime=Math.min(o,86400)},t.prototype.setLogoutUrl=function(o){this.logoutUrl=o},t.prototype.setLoginFramesetUrl=function(o){this.loginFramesetUrl=o},t.prototype.showTimeoutModal=function(){this.isTimingOut=!0,this.$timeoutModal.modal(this.options.modalConfig),this.fillProgressbar(this.$timeoutModal),"https:"===document.location.protocol&&"undefined"!=typeof Notification&&"granted"===Notification.permission&&document.hidden&&(this.webNotification=new Notification(TYPO3.lang["mess.login_about_to_expire_title"],{body:TYPO3.lang["mess.login_about_to_expire"],icon:"/typo3/sysext/backend/Resources/Public/Images/Logo.png"}),this.webNotification.onclick=function(){window.focus()})},t.prototype.hideTimeoutModal=function(){this.isTimingOut=!1,this.$timeoutModal.modal("hide"),"undefined"!=typeof Notification&&null!==this.webNotification&&this.webNotification.close()},t.prototype.showBackendLockedModal=function(){this.$backendLockedModal.modal(this.options.modalConfig)},t.prototype.hideBackendLockedModal=function(){this.$backendLockedModal.modal("hide")},t.prototype.showLoginForm=function(){var o=this;i.ajax({url:TYPO3.settings.ajaxUrls.logout,method:"GET",success:function(){TYPO3.configuration.showRefreshLoginPopup?o.showLoginPopup():o.$loginForm.modal(o.options.modalConfig)}})},t.prototype.showLoginPopup=function(){var o=window.open(this.loginFramesetUrl,"relogin_"+Math.random().toString(16).slice(2),"height=450,width=700,status=0,menubar=0,location=1");o&&o.focus()},t.prototype.hideLoginForm=function(){this.$loginForm.modal("hide")},t.prototype.initializeBackendLockedModal=function(){this.$backendLockedModal=this.generateModal(l.lockedModal),this.$backendLockedModal.find(".modal-header h4").text(TYPO3.lang["mess.please_wait"]),this.$backendLockedModal.find(".modal-body").append(i("<p />").text(TYPO3.lang["mess.be_locked"])),this.$backendLockedModal.find(".modal-footer").remove(),i("body").append(this.$backendLockedModal)},t.prototype.initializeTimeoutModal=function(){var o=this;this.$timeoutModal=this.generateModal(l.loginrefresh),this.$timeoutModal.addClass("modal-severity-notice"),this.$timeoutModal.find(".modal-header h4").text(TYPO3.lang["mess.login_about_to_expire_title"]),this.$timeoutModal.find(".modal-body").append(i("<p />").text(TYPO3.lang["mess.login_about_to_expire"]),i("<div />",{class:"progress"}).append(i("<div />",{class:"progress-bar progress-bar-warning progress-bar-striped active",role:"progressbar","aria-valuemin":"0","aria-valuemax":"100"}).append(i("<span />",{class:"sr-only"})))),this.$timeoutModal.find(".modal-footer").append(i("<button />",{class:"btn btn-default","data-action":"logout"}).text(TYPO3.lang["mess.refresh_login_logout_button"]).on("click",(function(){top.location.href=o.logoutUrl})),i("<button />",{class:"btn btn-primary t3js-active","data-action":"refreshSession"}).text(TYPO3.lang["mess.refresh_login_refresh_button"]).on("click",(function(){i.ajax({url:TYPO3.settings.ajaxUrls.login_timedout,method:"GET",success:function(){o.hideTimeoutModal()}})}))),this.registerDefaultModalEvents(this.$timeoutModal),i("body").append(this.$timeoutModal)},t.prototype.initializeLoginForm=function(){var t=this;if(!TYPO3.configuration.showRefreshLoginPopup){this.$loginForm=this.generateModal(l.loginFormModal),this.$loginForm.addClass("modal-notice");var e=String(TYPO3.lang["mess.refresh_login_title"]).replace("%s",TYPO3.configuration.username);this.$loginForm.find(".modal-header h4").text(e),this.$loginForm.find(".modal-body").append(i("<p />").text(TYPO3.lang["mess.login_expired"]),i("<form />",{id:"beLoginRefresh",method:"POST",action:TYPO3.settings.ajaxUrls.login}).append(i("<div />",{class:"form-group"}).append(i("<input />",{type:"password",name:"p_field",autofocus:"autofocus",class:"form-control",placeholder:TYPO3.lang["mess.refresh_login_password"],"data-rsa-encryption":"t3-loginrefres-userident"})),i("<input />",{type:"hidden",name:"username",value:TYPO3.configuration.username}),i("<input />",{type:"hidden",name:"userident",id:"t3-loginrefres-userident"}))),this.$loginForm.find(".modal-footer").append(i("<a />",{href:this.logoutUrl,class:"btn btn-default"}).text(TYPO3.lang["mess.refresh_exit_button"]),i("<button />",{type:"button",class:"btn btn-primary","data-action":"refreshSession"}).text(TYPO3.lang["mess.refresh_login_button"]).on("click",(function(){t.$loginForm.find("form").submit()}))),this.registerDefaultModalEvents(this.$loginForm).on("submit",this.submitForm),i("body").append(this.$loginForm),o.specified("TYPO3/CMS/Rsaauth/RsaEncryptionModule")&&o(["TYPO3/CMS/Rsaauth/RsaEncryptionModule"],(function(o){o.registerForm(i("#beLoginRefresh").get(0))}))}},t.prototype.generateModal=function(o){return i("<div />",{id:o,class:"t3js-modal "+o+" modal modal-type-default modal-severity-notice modal-style-light modal-size-small fade"}).append(i("<div />",{class:"modal-dialog"}).append(i("<div />",{class:"modal-content"}).append(i("<div />",{class:"modal-header"}).append(i("<h4 />",{class:"modal-title"})),i("<div />",{class:"modal-body"}),i("<div />",{class:"modal-footer"}))))},t.prototype.fillProgressbar=function(o){var t=this;if(this.isTimingOut)var i=0,e=o.find(".progress-bar"),n=e.children(".sr-only"),s=setInterval((function(){var o=i>=100;!t.isTimingOut||o?(clearInterval(s),o&&(t.hideTimeoutModal(),t.showLoginForm()),i=0):i+=1;var a=i+"%";e.css("width",a),n.text(a)}),300)},t.prototype.registerDefaultModalEvents=function(o){var t=this;return o.on("hidden.bs.modal",(function(){t.startTask()})).on("shown.bs.modal",(function(){t.stopTask(),t.$timeoutModal.find(".modal-footer .t3js-active").first().focus()})),o},t}();try{window.opener&&window.opener.TYPO3&&window.opener.TYPO3.LoginRefresh&&(r=window.opener.TYPO3.LoginRefresh),parent&&parent.window.TYPO3&&parent.window.TYPO3.LoginRefresh&&(r=parent.window.TYPO3.LoginRefresh),top&&top.TYPO3&&top.TYPO3.LoginRefresh&&(r=top.TYPO3.LoginRefresh)}catch(o){}return r||(r=new d,"undefined"!=typeof TYPO3&&(TYPO3.LoginRefresh=r)),r}));