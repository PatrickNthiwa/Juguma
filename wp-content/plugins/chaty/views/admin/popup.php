<?php
/**
 * Chaty Popups
 *
 * @author  : Premio <contact@premio.io>
 * @license : GPL2
 * */

if (defined('ABSPATH') === false) {
    exit;
}
?>
<div class="chaty-popup" id="custom-message-popup">
    <div class="chaty-popup-outer"></div>
    <div class="chaty-popup-inner popup-pos-bottom">
        <div class="chaty-popup-content">
            <div class="chaty-popup-close">
                <a href="javascript:void(0)" class="close-delete-pop close-chaty-popup-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M15.6 15.5c-.53.53-1.38.53-1.91 0L8.05 9.87 2.31 15.6c-.53.53-1.38.53-1.91 0s-.53-1.38 0-1.9l5.65-5.64L.4 2.4C-.13 1.87-.13 1.02.4.49s1.38-.53 1.91 0l5.64 5.63L13.69.39c.53-.53 1.38-.53 1.91 0s.53 1.38 0 1.91L9.94 7.94l5.66 5.65c.52.53.52 1.38 0 1.91z"/></svg>
                </a>
            </div>
            <div class="a-card a-card--normal">
                <div class="chaty-popup-header font-medium font-primary">
                    No channel was selected
                </div>
                <div class="chaty-popup-body">
                    Please select at least one chat channel before publishing your widget
                </div>
                <input type="hidden" id="delete_widget_id" value="">
                <div class="chaty-popup-footer">
                    <button type="button" class="btn btn-default check-for-numbers">Save Anyway</button>
                    <button type="button" class="close-chaty-popup-btn channel-setting-btn btn btn-primary">Change Number</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="chaty-popup" id="no-device-popup">
    <div class="chaty-popup-outer"></div>
    <div class="chaty-popup-inner popup-pos-bottom">
        <div class="chaty-popup-content">
            <div class="chaty-popup-close">
                <a href="javascript:void(0)" class="close-delete-pop close-chaty-popup-btn relative top-2 right-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M15.6 15.5c-.53.53-1.38.53-1.91 0L8.05 9.87 2.31 15.6c-.53.53-1.38.53-1.91 0s-.53-1.38 0-1.9l5.65-5.64L.4 2.4C-.13 1.87-.13 1.02.4.49s1.38-.53 1.91 0l5.64 5.63L13.69.39c.53-.53 1.38-.53 1.91 0s.53 1.38 0 1.91L9.94 7.94l5.66 5.65c.52.53.52 1.38 0 1.91z"/></svg>
                </a>
            </div>
            <div class="a-card a-card--normal">
                <div class="chaty-popup-header text-cht-gray-150 py-4 font-medium text-left px-5">
                    No channel was selected
                </div>
                <div class="text-cht-gray-150 text-base px-5 py-6">
                    Please select at least one chat channel before publishing your widget
                </div>
                <input type="hidden" id="delete_widget_id" value="">
                <div class="chaty-popup-footer flex px-5">
                    <button type="button" class="close-chaty-popup-btn channel-setting-btn btn btn-primary rounded-lg mr-5">Select Channel</button>
                    <button type="button" class="btn btn-default check-for-triggers btn btn-primary btn rounded-lg btn-primary bg-transparent text-cht-gray-150 border-cht-gray-150 hover:bg-transparent hover:text-cht-gray-150">Save Anyway</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="chaty-popup" id="no-device-value">
    <div class="chaty-popup-outer"></div>
    <div class="chaty-popup-inner popup-pos-bottom">
        <div class="chaty-popup-content">
            <div class="chaty-popup-close">
                <a href="javascript:void(0)" class="close-delete-pop close-chaty-popup-btn relative top-2 right-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M15.6 15.5c-.53.53-1.38.53-1.91 0L8.05 9.87 2.31 15.6c-.53.53-1.38.53-1.91 0s-.53-1.38 0-1.9l5.65-5.64L.4 2.4C-.13 1.87-.13 1.02.4.49s1.38-.53 1.91 0l5.64 5.63L13.69.39c.53-.53 1.38-.53 1.91 0s.53 1.38 0 1.91L9.94 7.94l5.66 5.65c.52.53.52 1.38 0 1.91z"/></svg>
                </a>
            </div>
            <div class="a-card a-card--normal">
                <div class="chaty-popup-header text-cht-gray-150 font-medium py-4 text-left px-5">
                    Fill out at least one channel details
                </div>
                <div class="text-cht-gray-150 text-base px-5 py-6">
                    You need to fill out at least one channel details for Chaty to show up on your website
                </div>
                <input type="hidden" id="delete_widget_id" value="">
                <div class="chaty-popup-footer flex px-5">
                    <button type="button" class="btn rounded-lg btn-default check-for-triggers  bg-transparent text-cht-gray-150 border-cht-gray-150 hover:bg-transparent hover:text-cht-gray-150 mr-5">Save Anyway</button>
                    <button type="button" class="close-chaty-popup-btn channel-setting-btn btn rounded-lg btn-primary">Fill channel details</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="chaty-popup" id="device-popup">
    <div class="chaty-popup-outer"></div>
    <div class="chaty-popup-inner popup-pos-bottom">
        <div class="chaty-popup-content">
            <div class="chaty-popup-close">
                <a href="javascript:void(0)" class="close-delete-pop close-chaty-popup-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M15.6 15.5c-.53.53-1.38.53-1.91 0L8.05 9.87 2.31 15.6c-.53.53-1.38.53-1.91 0s-.53-1.38 0-1.9l5.65-5.64L.4 2.4C-.13 1.87-.13 1.02.4.49s1.38-.53 1.91 0l5.64 5.63L13.69.39c.53-.53 1.38-.53 1.91 0s.53 1.38 0 1.91L9.94 7.94l5.66 5.65c.52.53.52 1.38 0 1.91z"/></svg>
                </a>
            </div>
            <div class="a-card a-card--normal">
                <div class="chaty-popup-header text-cht-gray-150 font-medium py-4 text-left px-5">
                    No device was selected
                </div>
                <div class="text-cht-gray-150 text-base px-5 py-6">
                    Please select mobile/desktop before publishing your widget
                </div>
                <input type="hidden" id="delete_widget_id" value="">
                <div class="chaty-popup-footer flex px-5">
                    <button type="button" class="btn btn-default check-for-triggers rounded-lg bg-transparent text-cht-gray-150 border-cht-gray-150 hover:bg-transparent hover:text-cht-gray-150 mr-5">Save Anyway</button>
                    <button type="button" class="close-chaty-popup-btn channel-setting-btn btn rounded-lg btn-primary">Select Device</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="chaty-popup" id="trigger-popup">
    <div class="chaty-popup-outer"></div>
    <div class="chaty-popup-inner popup-pos-bottom">
        <div class="chaty-popup-content">
            <div class="chaty-popup-close">
                <a href="javascript:void(0)" class="close-delete-pop close-chaty-popup-btn relative top-2 right-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M15.6 15.5c-.53.53-1.38.53-1.91 0L8.05 9.87 2.31 15.6c-.53.53-1.38.53-1.91 0s-.53-1.38 0-1.9l5.65-5.64L.4 2.4C-.13 1.87-.13 1.02.4.49s1.38-.53 1.91 0l5.64 5.63L13.69.39c.53-.53 1.38-.53 1.91 0s.53 1.38 0 1.91L9.94 7.94l5.66 5.65c.52.53.52 1.38 0 1.91z"></path></svg>
                </a>
            </div>
            <div class="a-card a-card--normal">
                <div class="chaty-popup-header font-medium text-cht-gray-150 py-4 text-left px-5">
                    No trigger was selected
                </div>
                <div class="text-cht-gray-150 text-base px-5 py-6">
                    Please select a trigger before publishing your widget
                </div>
                <input type="hidden" id="delete_widget_id" value="">
                <div class="chaty-popup-footer flex px-5">
                    <button type="button" class="btn-default check-for-status btn rounded-lg btn-primary bg-transparent text-cht-gray-150 border-cht-gray-150 hover:bg-transparent hover:text-cht-gray-150 mr-5">Save Anyway</button>
                    <button type="button" class="close-chaty-popup-btn select-trigger-btn btn btn-primary rounded-lg">Select Trigger</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="chaty-popup" id="status-popup">
    <div class="chaty-popup-outer"></div>
    <div class="chaty-popup-inner popup-pos-bottom">
        <div class="chaty-popup-content">
            <div class="chaty-popup-close">
                <a href="javascript:void(0)" class="close-delete-pop close-chaty-popup-btn relative top-2 right-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M15.6 15.5c-.53.53-1.38.53-1.91 0L8.05 9.87 2.31 15.6c-.53.53-1.38.53-1.91 0s-.53-1.38 0-1.9l5.65-5.64L.4 2.4C-.13 1.87-.13 1.02.4.49s1.38-.53 1.91 0l5.64 5.63L13.69.39c.53-.53 1.38-.53 1.91 0s.53 1.38 0 1.91L9.94 7.94l5.66 5.65c.52.53.52 1.38 0 1.91z"/></svg>
                </a>
            </div>
            <div class="a-card a-card--normal">
                <div class="chaty-popup-header font-medium text-cht-gray-150 py-4 text-left px-5">
                    Chaty is currently off
                </div>
                <div class="text-cht-gray-150 text-base px-5 py-6">
                    Chaty is currently turned off, would you like to save and show it on your site?
                </div>
                <input type="hidden" id="delete_widget_id" value="">
                <div class="chaty-popup-footer flex px-5">
                    <button type="button" class="btn-default status-and-save btn-primary btn rounded-lg bg-transparent text-cht-gray-150 border-cht-gray-150 hover:bg-transparent hover:text-cht-gray-150 mr-5">Just save and keep it off</button>
                    <button type="button" class="btn-primary change-status-btn change-status-and-save btn rounded-lg">Save & Show on my site</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="first-chaty-popup" id="agent-popup">
    <div class="first-chaty-popup-overlay"></div>
    <div class="upgrade-to-premium bg-white relative overflow-hidden">
        <div class="first-chaty-popup-data">
            <a href="#" class="close-first-popup close-popup">
                <img src="<?php echo CHT_PLUGIN_URL ?>admin/assets/images/x.svg" alt="chaty" />
            </a>
            <img class="mx-auto max-w-[200px]" src="<?php echo CHT_PLUGIN_URL ?>admin/assets/images/agent-list.png" alt="chaty" />
            <div class="text-[#49687E] mb-4 mt-2 font-primary text-2xl sm:text-3xl"><?php esc_html_e("👑 Multiple Agents is a Premium Feature", "chaty"); ?></div>
            <div class="text-base text-center font-normal font-primary max-w-[452px] mx-auto text-[#49687E] p-25">
                Show <b class="font-medium">multiple agents</b> under a single channel. <b class="font-medium">For example</b>, allow visitors to reach for pre-sales info or support with different channels on WhatsApp or any other channel.
            </div>
            <div class="mt-10 relative z-10">
                <a class="text-white border border-cht-primary bg-cht-primary focus:text-white hover:bg-[#9455e1] ease-linear duration-200 hover:text-white px-10 py-2.5 inline-flex items-center space-x-3 rounded-lg mx-auto text-base font-primary drop-shadow-3xl" target="_blank" href="<?php echo admin_url("admin.php?page=chaty-app-upgrade") ?>">
                    <?php esc_html_e("Upgrade to Pro", "chaty"); ?>
                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none">
                        <path d="M6.5 12L10.5 8L6.5 4" stroke="currentColor" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            <img class="absolute z-0 left-0 bottom-0" src="<?php echo CHT_PLUGIN_URL ?>admin/assets/images/particle.png" alt="chaty" />
            <img class="absolute z-0 right-0 top-[30%] drop-shadow-xl" src="<?php echo CHT_PLUGIN_URL ?>admin/assets/images/particle2.png" alt="chaty" />
            <img class="absolute z-0 left-5 drop-shadow-xl top-8" src="<?php echo CHT_PLUGIN_URL ?>admin/assets/images/particle3.png" alt="chaty" />
        </div>
    </div>
</div>
