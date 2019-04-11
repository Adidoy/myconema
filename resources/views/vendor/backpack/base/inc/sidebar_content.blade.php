<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li class="header" style="font-size:12pt; font-weight:bold;">Taxonomy</li>
    <li class="treeview">
        <li><a href='{{ backpack_url('maintenance/kingdom') }}'><span>Kingdom</span></a></li>    
        <li><a href='{{ backpack_url('maintenance/phylum') }}'><span>Phylum</span></a></li>
        <li><a href='{{ backpack_url('maintenance/class') }}'><span>Class</span></a></li>
    </li>
</li>