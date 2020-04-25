<div class="popup-tab-content" id="tab">
    <!-- Welcome Text -->
    <div class="padding-bottom-0">

        <div class="row">
            <div class="col-12">
                <div class="modal-main">Detailed Offer View</div>
            </div>
        </div>

        <div class="row margin-top-20">
            <div class="col-12">
                <strong class="modal-super">Freelancer</strong>
                <div class="userid modal-super-">
                    <span>{{ $offer->user->full_name }}</span>
                    <span><i class="icon-feather-star" title="Feedback" data-tippy-placement="top"></i> 98%</span>
                    <span><i class="icon-feather-link" title="Reliability" data-tippy-placement="top"></i> 89%</span>
                </div>
            </div>
        </div>
        <div class="row margin-top-10">
            <div class="col-12">
                <strong class="modal-super">Freelancer Badges <i class="icon-feather-info" title="Verified user badges" data-tippy-placement="top"></i></strong>
                @if($offer->user->badge->count() > 0)
                    @badge(['badges' => $offer->user->badge]) @endbadge
                @else
                    <div class="modal-super- modal-badges">
                        Not Earned Yet
                    </div>
                @endif
            </div>
        </div>
        <div class="row margin-top-20">
            <div class="col-12">
                <strong class="modal-super">Offer Made <span class="crate-badge modal-crate-gray modal-crate-full green">${{ $offer->amount }}</span></strong>
                <!-- Content -->
                <div class="item-content">
                    <div class="item-description">
                        <p class="modal-super-">{{ $offer->description }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="margin-top-20">
            <ul class="row modal-data-tabs" data-tabs>
                <li class="col-4">
                    <a href="#accept-offer" class="button button-sliding-icon ripple-effect modal-button">Accept Offer</a>
                </li>
                <li class="col-4">
                    <a href="#counter-offer" class="button dark button-sliding-icon ripple-effect modal-button">Counter</a>
                </li>
                <li class="col-4">
                    <a href="#decline-offer" class="">Decline</a>
                </li>
            </ul>
            <div class="modal-active"></div>
            <div class="row modal-data-content">
                <div class="col-12">
                    <div id="accept-offer" class="row">
                        <div class="col-12">Are you sure you want to accept this offer?</div>
                        <div class="col-2"><a id="offer-accepted" href="javascript:;" onclick="acceptOffer('{{ $offer->id }}')" class="popup-with-zoom-anim">Yes</a></div>
                        <div class="col-2"><a href="#small-dialog-10" class="popup-with-zoom-anim">No</a></div>
                    </div>
                </div>
                <div id="counter-offer" class="full-width">
                    <div class="col-12">
                        <div>
                            <div class="margin-bottom-10">Enter your counter offer below</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bidding-field">
                            <!-- Quantity Buttons -->
                            <div class="qtyButtons">
                                <div class="qtyDec"></div>
                                <input type="text" name="qtyInput" value="1" id="counterAmount">
                                <div class="qtyInc"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 margin-top-10">
                        <a href="javascript:;" onclick="counterOffer('{{ $offer->listing_id }}', '{{ $offer->id }}');" id="send-counter" class="popup-with-zoom-anim button button-sliding-icon ripple-effect modal-button">Send Offer <i class="icon-material-outline-arrow-right-alt"></i></a>
                    </div>
                </div>
                <div class="col-12">
                    <div id="decline-offer" class="row">
                        <div class="col-12">Are you sure you want to decline this offer?</div>
                        <div class="col-2"><a id="offer-declined" onclick="declineOffer('{{ $offer->id }}')" href="javascript:;" class="popup-with-zoom-anim">Yes</a></div>
                        <div class="col-2"><a href="javascript:;" onclick="closeModel()" class="popup-with-zoom-anim">No</a></div> <!-- Reload page when "No" is selected -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(function(e) {
    var tabs = new Tabby('[data-tabs]');
    $('[data-tabs]').click(function(e) {
        var tabbyDiv = $(this).next();
        if(tabbyDiv.hasClass('modal-active')) {
            tabbyDiv.addClass('tabby-border');
        }
    });
});

    function acceptOffer(id) {
        var url = "{{ route('listing.accept-offer',':id') }}";
        url = url.replace(':id', id);
        $.easyAjax({
            url: url,
            type: "GET",
            container: "#small-dialog-10",
            success: function (response) {
                viewOffer(listingId, totalListingOffer);
            }
        });
    }
    function declineOffer(id) {
    var url = "{{ route('listing.decline-offer',':id') }}";
    url = url.replace(':id', id);
    $.easyAjax({
        url: url,
        type: "GET",
        container: "#small-dialog-10",
        success: function (response) {
            window.location.reload();
        }
    });
}
function counterOffer(listingId, offerId){
    var amount = $('#counterAmount').val();
    $.easyAjax({
        url: "{!! route('list.count-offer') !!}",
        type: "POST",
        container: "#sendOfferForm",
        data: {'listingID' : listingId, 'offerID' : offerId, 'amount' : amount, 'description' : '', '_token': "{{ csrf_token() }}" },
        success: function (response) {
            if(response.status == 'success') {
                Snackbar.show({
                    text: 'Your bid has been placed!'
                });
                $.magnificPopup.close();
                window.location.reload();
            }
        }
    });
}
</script>
