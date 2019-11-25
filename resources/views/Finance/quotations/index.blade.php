
@foreach($quotations as $quotation)
    <li><a href="{{ route('quotationreview.show', $quotation->id)  }}"> {{$quotation->companyname }}</a></li>
    @endforeach
    </ul>
