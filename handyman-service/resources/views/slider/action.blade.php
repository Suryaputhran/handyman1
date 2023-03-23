
<?php
    $auth_user= authSession();
?>
{{ Form::open(['route' => ['slider.destroy', $slider->id], 'method' => 'delete','data--submit'=>'slider'.$slider->id]) }}
<div class="d-flex justify-content-end align-items-center">
    @if(!$slider->trashed())
    @if($auth_user->can('slider edit'))
        <a class=" mr-2" href="{{ route('slider.create',['id' => $slider->id]) }}" title="{{ __('messages.update_form_title',['form' => __('messages.slider') ]) }}"><i class="fas fa-pen text-primary"></i></a>
    @endif
    @if($auth_user->can('slider edit'))
        <a class="mr-2 text-danger" href="javascript:void(0)" data--submit="slider{{$slider->id}}" 
            data--confirmation='true' data-title="{{ __('messages.delete_form_title',['form'=>  __('messages.slider') ]) }}"
            title="{{ __('messages.delete_form_title',['form'=>  __('messages.slider') ]) }}"
            data-message='{{ __("messages.delete_msg") }}'>
            <i class="far fa-trash-alt"></i>
        </a>
    @endif

    @endif
    @if(auth()->user()->hasAnyRole(['admin']) && $slider->trashed())
        <a href="{{ route('slider.action',['id' => $slider->id, 'type' => 'restore']) }}"
            title="{{ __('messages.restore_form_title',['form' => __('messages.slider') ]) }}"
            data--submit="confirm_form"
            data--confirmation='true'
            data--ajax='true'
            data-title="{{ __('messages.restore_form_title',['form'=>  __('messages.slider') ]) }}"
            data-message='{{ __("messages.restore_msg") }}'
            data-datatable="reload"
            class="mr-2">
            <i class="fas fa-redo text-primary"></i>
        </a>
        <a href="{{ route('slider.action',['id' => $slider->id, 'type' => 'forcedelete']) }}"
            title="{{ __('messages.forcedelete_form_title',['form' => __('messages.slider') ]) }}"
            data--submit="confirm_form"
            data--confirmation='true'
            data--ajax='true'
            data-title="{{ __('messages.forcedelete_form_title',['form'=>  __('messages.slider') ]) }}"
            data-message='{{ __("messages.forcedelete_msg") }}'
            data-datatable="reload"
            class="mr-2">
            <i class="far fa-trash-alt text-danger"></i>
        </a>
    @endif
</div>
{{ Form::close() }}