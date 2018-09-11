<aside id="sidebar_right" class="nano">
    <div class="sidebar_right_content nano-content">
        <div class="tab-block sidebar-block br-n">
            <div class="panel-heading">
                <span class="panel-title text-info fw700"><i class="fa fa-pencil hidden"></i> Members Activity</span>
            </div>
            <div class="panel-menu admin-form pn">
                <!-- Panel Break Smart Widget -->
                <div class="smart-widget sm-right smr-50">
                    <label class="field">
                        <input type="text" name="sub" id="sub" class="gui-input br-n" placeholder="search your friend">
                    </label>
                    <button type="submit" class="button br-n br-l"> <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="panel-body pn">
                <table class="table mbn tc-med-1 tc-bold-last">
                   
                    <tbody>
                        
                        @foreach ($users as $user)

                            @if($user->isOnline())
                                <tr>
                                    <td colspan="2">
                                        <span class="fa fa-circle text-success fs14 mr10"></span>{{ $user->name}}
                                    </td>
                                    <td><img src="https://via.placeholder.com/50x50"  width="30" style="border-radius:50%" alt=""></td>
                                </tr>
                            @endif
                        @endforeach
                        
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</aside>