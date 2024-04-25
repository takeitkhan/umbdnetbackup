<div id="homePopupAdsModal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent p-0 border-0">
            <div class="modal-body">
              <button type="button" class="close popup-ads-modal-close" data-dismiss="modal">&times;</button>
              	<div class="bg-white p-3">
                  <?php echo apply_filters( 'the_content', $options['home_popup_ads'] ); ?>
                  <?php //echo $options['home_popup_ads'];?>
              </div>
            </div>
        </div>
    </div>
</div>

<style>
  button.close.popup-ads-modal-close {
    background: #041067 !important;
    position: absolute !important;
    /* z-index: 9999999999; */
    right: 6px  !important;
    border-radius: 50%  !important;
    padding: 0px 6px  !important;
    opacity: 1  !important;
    top: 4px !important;
    border: 2px solid #ffffff  !important;
    color: #fff  !important;
    font-size: 43px  !important;
    width: 40px;
    height: 40px;
  }
  
  #homePopupAdsModal.modal {
    z-index: 99999;
  }

</style>