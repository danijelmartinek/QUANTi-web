<ul class="nav navbar-nav">
  @if((Auth::user()->role_id) == 5 || (Auth::user()->role_id) == 6 )
  @else
    <li>
        <a href="https://quanti-kz.slack.com/messages/C7345GS3C/" target="_blank">
            <span class="icon"><i class="fa fa-slack" aria-hidden="true"></i></span>
            <span class="title">Slack Chat</span>
        </a>
    </li>
  @endif
  <!--
  @if((Auth::user()->role_id) == 1 || (Auth::user()->role_id) == 2 )
    <li>
        <a href="/admin/gmail">
            <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <span class="title">Gmail</span>
        </a>
    </li>
  @endif
  -->
</ul>
