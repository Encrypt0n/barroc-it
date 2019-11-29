
@foreach($quotations as $quotation)
    <li><a href="{{ route('reviewQuotation.show', $quotation->id)  }}"> {{$quotation->companyname }}</a></li>
    @endforeach
    </ul>
