<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-offset-3 col-xs-12">
                <h3><a class="js-show-newsletter">Join our Newsletter</a></h3>
                <ul>
                    <div class="form-group">
                        <form class="js-subscribe-newsletter form_subscribe_join hidden">
                            {{ csrf_field() }}
                            <input class="form-control form_field js-field-email" type="email" required placeholder="E-mail">
                            <button class="form_submit btn btn-newsletter btn-block" type="submit">Subscribe</button>
                        </form>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
