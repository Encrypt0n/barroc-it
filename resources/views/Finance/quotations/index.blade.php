<?php
@foreach($quotations as $quotation)
    <li><a href="{{ route('$quotation.show', $quotation->id)  }}"> {{$quotation->name }}</a></li>
    @endforeach
    </ul>
