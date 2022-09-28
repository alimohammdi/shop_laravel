
<div class="tab-pane" id="comments" role="tabpanel" aria-expanded="false">
    <article>
        <h2 class="param-title">
            نظرات کاربران
            <span>۱۲۳ نظر</span>
        </h2>
        <div class="comments-area default">
            <ol class="comment-list">
                <!-- #comment-## -->
             @foreach($comment as $comm)
                    <li>
                        <div class="comment-body">
                            <div class="comment-author">
                                <img alt="" src="{{ asset('assets/img/default-avatar.png') }}" class="avatar"><cite class="fn">{{ $comm->user->name }}</cite>
                                <span class="says">گفت:</span> </div>

                            <div class="commentmetadata"><a href="#">
                                    {{$comm->created_at}}</a> </div>

                            <p>{{ $comm->text }}</p>

                            <div class="reply"><a class="comment-reply-link" href="#">پاسخ</a></div>
                        </div>
                    </li>

             @endforeach


                <!-- #comment-## -->
{{--                <li>--}}
{{--                    <div class="comment-body">--}}
{{--                        <div class="comment-author">--}}
{{--                            <img alt="" src="assets/img/default-avatar.png" class="avatar"><cite class="fn">رضا</cite>--}}
{{--                            <span class="says">گفت:</span> </div>--}}

{{--                        <div class="commentmetadata"><a href="#">--}}
{{--                                اسفند ۲۰, ۱۳۹۶ در ۹:۴۲ ب.ظ</a> </div>--}}

{{--                        <p>--}}
{{--                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از--}}
{{--                            صنعت چاپ و با استفاده از طراحان گرافیک است.--}}
{{--                        </p>--}}

{{--                        <div class="reply"><a class="comment-reply-link" href="#">پاسخ</a></div>--}}
{{--                    </div>--}}
{{--                    <ol class="children">--}}
{{--                        <li>--}}
{{--                            <div class="comment-body">--}}
{{--                                <div class="comment-author">--}}
{{--                                    <img alt="" src="assets/img/default-avatar.png" class="avatar"><cite class="fn">بهرامی راد</cite> <span class="says">گفت:</span> </div>--}}

{{--                                <div class="commentmetadata"><a href="#">--}}
{{--                                        اسفند ۲۰, ۱۳۹۶ در ۹:۴۷ ب.ظ</a>--}}
{{--                                </div>--}}

{{--                                <p>لورم ایپسوم متن ساختگی با تولید سادگی--}}
{{--                                    نامفهوم از صنعت چاپ و با استفاده از--}}
{{--                                    طراحان گرافیک است.--}}
{{--                                    چاپگرها و متون بلکه روزنامه و مجله در--}}
{{--                                    ستون و سطرآنچنان که لازم است و برای--}}
{{--                                    شرایط فعلی تکنولوژی--}}
{{--                                    مورد نیاز و کاربردهای متنوع با هدف بهبود--}}
{{--                                    ابزارهای کاربردی می باشد.</p>--}}

{{--                                <div class="reply"><a class="comment-reply-link" href="#">پاسخ</a></div>--}}
{{--                            </div>--}}
{{--                            <ol class="children">--}}
{{--                                <li>--}}
{{--                                    <div class="comment-body">--}}
{{--                                        <div class="comment-author">--}}
{{--                                            <img alt="" src="assets/img/default-avatar.png" class="avatar"> <cite class="fn">محمد</cite>--}}
{{--                                            <span class="says">گفت:</span>--}}
{{--                                        </div>--}}

{{--                                        <div class="commentmetadata">--}}
{{--                                            <a href="#">--}}
{{--                                                خرداد ۳۰, ۱۳۹۷ در ۸:۵۳--}}
{{--                                                ق.ظ</a> </div>--}}

{{--                                        <p>عالیه</p>--}}

{{--                                        <div class="reply"><a class="comment-reply-link" href="#">پاسخ</a></div>--}}
{{--                                    </div>--}}
{{--                                    <ol class="children">--}}
{{--                                        <li>--}}
{{--                                            <div class="comment-body">--}}
{{--                                                <div class="comment-author">--}}
{{--                                                    <img alt="" src="assets/img/default-avatar.png" class="avatar">--}}
{{--                                                    <cite class="fn">اشکان</cite>--}}
{{--                                                    <span class="says">گفت:</span>--}}
{{--                                                </div>--}}

{{--                                                <div class="commentmetadata">--}}
{{--                                                    <a href="#">--}}
{{--                                                        خرداد ۳۰, ۱۳۹۷ در--}}
{{--                                                        ۸:۵۳ ق.ظ</a> </div>--}}

{{--                                                <p>لورم ایپسوم متن ساختگی با--}}
{{--                                                    تولید سادگی نامفهوم از--}}
{{--                                                    صنعت چاپ و با استفاده از--}}
{{--                                                    طراحان--}}
{{--                                                    گرافیک است. چاپگرها و--}}
{{--                                                    متون بلکه روزنامه و مجله--}}
{{--                                                    در ستون و سطرآنچنان که--}}
{{--                                                    لازم است و--}}
{{--                                                    برای شرایط فعلی تکنولوژی--}}
{{--                                                    مورد نیاز و کاربردهای--}}
{{--                                                    متنوع با هدف بهبود--}}
{{--                                                    ابزارهای--}}
{{--                                                    کاربردی می باشد.</p>--}}

{{--                                                <div class="reply"><a class="comment-reply-link" href="#">پاسخ</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <!-- #comment-## -->--}}
{{--                                    </ol>--}}
{{--                                    <!-- .children -->--}}
{{--                                </li>--}}
{{--                                <!-- #comment-## -->--}}
{{--                            </ol>--}}
{{--                            <!-- .children -->--}}
{{--                        </li>--}}
{{--                        <!-- #comment-## -->--}}
{{--                    </ol>--}}
{{--                    <!-- .children -->--}}
{{--                </li>--}}
{{--                <!-- #comment-## -->--}}
{{--                <li>--}}
{{--                    <div class="comment-body">--}}
{{--                        <div class="comment-author">--}}
{{--                            <img alt="" src="assets/img/default-avatar.png" class="avatar"> <cite class="fn">جلال</cite>--}}
{{--                            <span class="says">گفت:</span> </div>--}}

{{--                        <div class="commentmetadata"><a href="#">--}}
{{--                                اسفند ۲۱, ۱۳۹۶ در ۱:۱۰ ب.ظ</a> </div>--}}

{{--                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از--}}
{{--                            صنعت چاپ و با استفاده از طراحان گرافیک است.--}}
{{--                            چاپگرها و--}}
{{--                            متون بلکه روزنامه و مجله در ستون و سطرآنچنان که--}}
{{--                            لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و--}}
{{--                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می--}}
{{--                            باشد.</p>--}}

{{--                        <div class="reply"><a class="comment-reply-link" href="">پاسخ</a></div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <!-- #comment-## -->--}}
            </ol>
        </div>
    </article>
</div>
<div class="tab-pane form-comment" id="questions" role="tabpanel" aria-expanded="false">
    <article>
        <h2 class="param-title">
            افزودن نظر
            <span>نظر خود را در مورد محصول مطرح نمایید</span>
        </h2>


        <form action="{{ route('send.comment') }}" method="post" class="comment" id="comments">
            @csrf
            @auth
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" >
            @endauth
            @error('user_id')
                 <span class="alert alert-danger" > {{ $message }}</span>
            @enderror
            <input type="hidden" name="commentable_id" value="{{ $product->id }}" >
            <input type="hidden" name="commentable_type" value="{{ get_class($product) }}" >
            <input type="hidden" name="parent_id" value="0" >
            <textarea class="form-control" name="comment" placeholder="نظر" rows="5"></textarea>
            @error('comment')
            <span class="alert alert-danger" > {{ $message }}</span>
            @enderror
            <button name="submit" class="btn btn-default">ارسال نظر</button>
            @guest
                <span class="alert alert-danger m-2 p-1"> برای نظردهی لطفا ابتدا وارد اکانت خود شوید  <a href="{{ route('login') }}" class="text_bold text-dark">  <bold>ورود</bold>  </a></span>
                <br>
            @endguest
        </form>
    </article>
</div>


@section('js')
    <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script>
        $('form#comments').submit(function(event){
            event.preventDefault();
            let alldata = $(this).serialize();
            let url = $(this).attr('action')
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                data: alldata,
                success:function(response){
                    $('input[name=user_id]').val('')
                    $('input[name=commentable_id]').val('')
                    $('input[name=commentable_type]').val('')
                    $('input[name=parent_id]').val('')
                    $('textarea[name=comment]').val('')
                    alert('نظر شما با موفقیت ارسال شد :)')
                }
            })
        })
    </script>
@endsection
