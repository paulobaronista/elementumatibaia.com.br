<!-- Modal -->
<div class="modal fade modalMapa" id="modalMapa" tabindex="-1" role="dialog" aria-labelledby="modalMapa" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
            <div class="modal-body">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/mapa-full.jpg" alt="Mapa">
            </div>
        </div>
    </div>
</div>

<div class="modal fade modalVideo" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="modalVideo" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
            <div class="modal-body">
                <video width="100%" height="auto" controls>
                    <source src="<?= base_url(); ?>assets/video/video.mp4" type="video/mp4">
                    <source src="<?= base_url(); ?>assets/video/video.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>