<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner-detail">
            <div
                class="col-lg-8 col-md-8 col-sm-12 col-xs-10 counter-section col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1">
                <div class="main_counter_content text-left white-text wow fadeInUp">
                    @if (isset($counters))
                        @php
                         $lastindex = $counters->keys()->last();   
                        @endphp
                        @foreach ($counters as $key => $item)
                            @if ($key !== $lastindex)
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_counter text-left">
                                    <ul>
                                        <li>
                                            <div class="box-add-icon"><img src="{{ asset('/icon/' . $item->icon) }}"
                                                    class="img-responsive"></div>
                                            <div class="single_counter_text">
                                                <h4><span class="statistic-counter">{{ $item->numbers }}</span>+</h4>
                                                <h6>{{ $item->title }}</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
            @if (isset($counters))
            @php
             $lastindex = $counters->keys()->last();   
            @endphp
            @foreach ($counters as $key => $item)
                @if ($key === $lastindex)
                <div
                class="col-lg-4 col-md-4 col-sm-12 col-xs-10 contact-box-bg text-left col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact-box">
                    <ul>
                        <li>
                            <div class="contact-box-icon"><img
                                src="{{ asset('/icon/' . $item->icon) }}" class="img-responsive">
                        </div>
                        <div class="contact-box-info">
                            <p>{{ $item->title }}</p>
                            <h5>{{ $item->numbers }}</h5>

                        </div>
                        </li>
                    </ul>
                </div>
            </div>
                @endif
            @endforeach
        @endif
            
        </div>
    </div>
</div>


{{-- @if (isset($counters))
                        @php
                         $lastindex = $counters->keys()->last();   
                        @endphp
                        @foreach ($counters as $key => $item)
                            @if ($key !== $lastindex)
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_counter text-left">
                                    <ul>
                                        <li>
                                            <div class="box-add-icon"><img src="{{ asset('/icon/' . $item->icon) }}"
                                                    class="img-responsive"></div>
                                            <div class="single_counter_text">
                                                <h4><span class="statistic-counter">{{ $item->numbers }}</span>+</h4>
                                                <h6>{{ $item->title }}</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <div
                                    class="col-lg-4 col-md-4 col-sm-12 col-xs-10 contact-box-bg text-left col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact-box">
                                        <ul>
                                            <li>
                                                <div class="contact-box-icon"><img
                                                        src="{{ asset('/icon/' . $item->icon) }}" class="img-responsive">
                                                </div>
                                                <div class="contact-box-info">
                                                    <p>{{ $item->title }}</p>
                                                    <h5>{{ $item->numbers }}</h5>

                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif --}}