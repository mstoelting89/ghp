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
var __importDefault=this&&this.__importDefault||function(t){return t&&t.__esModule?t:{default:t}};define(["require","exports","jquery","TYPO3/CMS/Core/Ajax/AjaxRequest","./Popover","bootstrap"],(function(t,e,o,a,l){"use strict";o=__importDefault(o);class s{constructor(){this.ajaxUrl=TYPO3.settings.ajaxUrls.context_help,this.trigger="click",this.placement="auto",this.selector=".help-link",this.initialize()}static resolveBackend(){return void 0!==window.opener&&null!==window.opener?window.opener.top:top}initialize(){const t=s.resolveBackend();void 0!==t.TYPO3.settings.ContextHelp&&(this.helpModuleUrl=t.TYPO3.settings.ContextHelp.moduleUrl),void 0===TYPO3.ShortcutMenu&&void 0===t.TYPO3.ShortcutMenu&&o.default(".icon-actions-system-shortcut-new").closest(".btn").hide();let e="&nbsp;";void 0!==t.TYPO3.lang&&(e=t.TYPO3.lang.csh_tooltip_loading);const a=o.default(this.selector);a.attr("data-loaded","false").attr("data-html","true").attr("data-original-title",e).attr("data-placement",this.placement).attr("data-trigger",this.trigger),l.popover(a),o.default(document).on("show.bs.popover",this.selector,t=>{const e=o.default(t.currentTarget),a=e.data("description");void 0!==a&&""!==a?l.setOptions(e,{title:e.data("title"),content:a}):"false"===e.attr("data-loaded")&&e.data("table")&&this.loadHelp(e),e.closest(".t3js-module-docheader").length&&l.setOption(e,"placement","bottom")}).on("shown.bs.popover",this.selector,t=>{const e=o.default(t.target).data("bs.popover").$tip;e.find(".popover-title").is(":visible")||e.addClass("no-title")}).on("click",".help-has-link",t=>{o.default(".popover").each((e,a)=>{const l=o.default(a);l.has(t.target).length&&this.showHelpPopup(l.data("bs.popover").$element)})}).on("click","body",t=>{o.default(this.selector).each((e,a)=>{const s=o.default(a);s.is(t.target)||0!==s.has(t.target).length||0!==o.default(".popover").has(t.target).length||l.hide(s)})})}showHelpPopup(t){try{const e=window.open(this.helpModuleUrl+"&table="+t.data("table")+"&field="+t.data("field")+"&action=detail","ContextHelpWindow","height=400,width=600,status=0,menubar=0,scrollbars=1");return e.focus(),l.hide(t),e}catch(t){}}loadHelp(t){const e=t.data("table"),o=t.data("field");e&&new a(this.ajaxUrl).withQueryArguments({params:{action:"getContextHelp",table:e,field:o}}).get().then(async e=>{const o=await e.resolve(),a=o.title||"",s=o.content||"<p></p>";l.setOptions(t,{title:a,content:s}),t.attr("data-loaded","true").one("hidden.bs.popover",()=>{l.show(t)}),l.hide(t)})}}return new s}));