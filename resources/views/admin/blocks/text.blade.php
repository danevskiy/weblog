@twillBlockTitle('Body text')
@twillBlockIcon('text')

@formField('wysiwyg', [
    'name' => 'text',
    'label' => 'Text',
    'type' => 'quill',
    'placeholder' => 'Text',
    'toolbarOptions' => [
      ['header' => [2, 3, 4, 5, 6, false]],
      'bold',
      'italic',
      'underline',
      'strike',
      ["script" => "super"],
      ["script" => "sub"],
      "blockquote",
      "code-block",
      ['list' => 'ordered'],
      ['list' => 'bullet'],
      ['indent' => '-1'],
      ['indent' => '+1'],
      ["align" => []],
      ["direction" => "rtl"],
      ['link'=>"external"],
      "clean",
    ],
    'translated' => true,
    'editSource' => true,
])
