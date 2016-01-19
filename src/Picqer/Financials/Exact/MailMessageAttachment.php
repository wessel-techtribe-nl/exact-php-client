<?php namespace Picqer\Financials\Exact;

class MailMessageAttachment extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Attachment',
        'AttachmentFileName',
        'MailMessageId',
        'Type'
    ];

    protected $url = 'mailbox/MailMessageAttachments';

}
