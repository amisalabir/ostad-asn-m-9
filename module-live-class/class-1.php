<!-- 
	PHP Environment Setup | Variable, Constant, Comments, Printing output | Addition Subtraction Multiplication Division in PHP |  PHP printf, sprintf
 -->
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns:mv="http://macVmlSchemaUri" xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta name=Title content="">
<meta name=Keywords content="">
<meta http-equiv=Content-Type content="text/html; charset=macintosh">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 15">
<meta name=Originator content="Microsoft Word 15">
<link rel=File-List href="class%201.fld/filelist.xml">
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Engr. Rabbil Hasan</o:Author>
  <o:LastAuthor>Microsoft Office User</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>1</o:TotalTime>
  <o:Created>2023-09-12T10:34:00Z</o:Created>
  <o:LastSaved>2023-09-12T10:34:00Z</o:LastSaved>
  <o:Pages>6</o:Pages>
  <o:Words>924</o:Words>
  <o:Characters>5267</o:Characters>
  <o:Lines>43</o:Lines>
  <o:Paragraphs>12</o:Paragraphs>
  <o:CharactersWithSpaces>6179</o:CharactersWithSpaces>
  <o:Version>15.0</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData href="class%201.fld/themedata.thmx">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:View>Print</w:View>
  <w:Zoom>120</w:Zoom>
  <w:GrammarState>Clean</w:GrammarState>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>EN-US</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>AR-SA</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
  DefSemiHidden="false" DefQFormat="false" DefPriority="99"
  LatentStyleCount="381">
  <w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 9"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="header"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footer"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index heading"/>
  <w:LsdException Locked="false" Priority="35" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of figures"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope return"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="line number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="page number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of authorities"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="macro"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toa heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 5"/>
  <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Closing"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Signature"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="true"
   UnhideWhenUsed="true" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Message Header"/>
  <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Salutation"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Date"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Note Heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Block Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="FollowedHyperlink"/>
  <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Document Map"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Plain Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="E-mail Signature"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Top of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Bottom of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal (Web)"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Acronym"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Cite"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Code"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Definition"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Keyboard"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Preformatted"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Sample"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Typewriter"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Variable"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Table"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation subject"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="No List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Contemporary"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Elegant"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Professional"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Balloon Text"/>
  <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Theme"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" QFormat="true"
   Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" QFormat="true"
   Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" QFormat="true"
   Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" QFormat="true"
   Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" QFormat="true"
   Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" QFormat="true"
   Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" SemiHidden="true"
   UnhideWhenUsed="true" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
  <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
  <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
  <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
  <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
  <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
  <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
  <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Mention"/>
 </w:LatentStyles>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
@font-face
	{font-family:Arial;
	panose-1:2 11 6 4 2 2 2 2 2 4;
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:-536859905 -1073711037 9 0 511 0;}
@font-face
	{font-family:"Courier New";
	panose-1:2 7 3 9 2 2 5 2 4 4;
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:-536859905 -1073711037 9 0 511 0;}
@font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;
	mso-font-charset:2;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:1;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:-536870145 1073786111 1 0 415 0;}
@font-face
	{font-family:Roboto;
	panose-1:2 0 0 0 0 0 0 0 0 0;
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:-536870145 1342185563 32 0 415 0;}
 /* Style Definitions */
p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:Calibri;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;
	mso-font-kerning:1.0pt;
	mso-ligatures:standardcontextual;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-margin-top-alt:auto;
	margin-right:0in;
	mso-margin-bottom-alt:auto;
	margin-left:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
code
	{mso-style-noshow:yes;
	mso-style-priority:99;
	font-family:"Courier New";
	mso-ascii-font-family:"Courier New";
	mso-fareast-font-family:"Times New Roman";
	mso-hansi-font-family:"Courier New";
	mso-bidi-font-family:"Courier New";}
pre
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-link:"HTML Preformatted Char";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;
	font-size:10.0pt;
	font-family:"Courier New";
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:.5in;
	mso-add-space:auto;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:Calibri;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;
	mso-font-kerning:1.0pt;
	mso-ligatures:standardcontextual;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:Calibri;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;
	mso-font-kerning:1.0pt;
	mso-ligatures:standardcontextual;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:Calibri;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;
	mso-font-kerning:1.0pt;
	mso-ligatures:standardcontextual;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:.5in;
	mso-add-space:auto;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:Calibri;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;
	mso-font-kerning:1.0pt;
	mso-ligatures:standardcontextual;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
span.HTMLPreformattedChar
	{mso-style-name:"HTML Preformatted Char";
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"HTML Preformatted";
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Courier New";
	mso-ascii-font-family:"Courier New";
	mso-fareast-font-family:"Times New Roman";
	mso-hansi-font-family:"Courier New";
	mso-bidi-font-family:"Courier New";
	mso-font-kerning:0pt;
	mso-ligatures:none;}
span.hljs-number
	{mso-style-name:hljs-number;
	mso-style-unhide:no;}
span.hljs-variable
	{mso-style-name:hljs-variable;
	mso-style-unhide:no;}
span.hljs-string
	{mso-style-name:hljs-string;
	mso-style-unhide:no;}
span.hljs-literal
	{mso-style-name:hljs-literal;
	mso-style-unhide:no;}
span.hljs-keyword
	{mso-style-name:hljs-keyword;
	mso-style-unhide:no;}
span.hljs-class
	{mso-style-name:hljs-class;
	mso-style-unhide:no;}
span.hljs-title
	{mso-style-name:hljs-title;
	mso-style-unhide:no;}
span.hljs-function
	{mso-style-name:hljs-function;
	mso-style-unhide:no;}
span.hljs-comment
	{mso-style-name:hljs-comment;
	mso-style-unhide:no;}
span.hljs-subst
	{mso-style-name:hljs-subst;
	mso-style-unhide:no;}
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:11.0pt;
	mso-ansi-font-size:11.0pt;
	mso-bidi-font-size:11.0pt;
	font-family:Calibri;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;
	mso-font-kerning:1.0pt;
	mso-ligatures:standardcontextual;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
.MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:8.5in 11.0in;
	margin:1.0in 1.0in 1.0in 1.0in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
@list l0
	{mso-list-id:349256717;
	mso-list-type:hybrid;
	mso-list-template-ids:859712278 1652883324 -1 -1 -1 -1 -1 -1 -1 -1;}
@list l0:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	color:black;
	mso-themecolor:text1;
	mso-ansi-font-weight:normal;
	mso-bidi-font-weight:normal;}
@list l0:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l0:level3
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l0:level4
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l0:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l0:level6
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l0:level7
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l0:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l0:level9
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l1
	{mso-list-id:426927735;
	mso-list-type:hybrid;
	mso-list-template-ids:1357007652 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l1:level1
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l1:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l1:level3
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l1:level4
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l1:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l1:level6
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l1:level7
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l1:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l1:level9
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l2
	{mso-list-id:568736828;
	mso-list-template-ids:767213976;}
@list l2:level1
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l2:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l2:level3
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l2:level4
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l2:level5
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l2:level6
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l2:level7
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l2:level8
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l2:level9
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l3
	{mso-list-id:776483592;
	mso-list-template-ids:-569875710;}
@list l3:level1
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l3:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l3:level3
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l3:level4
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l3:level5
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l3:level6
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l3:level7
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l3:level8
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l3:level9
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l4
	{mso-list-id:895361028;
	mso-list-type:hybrid;
	mso-list-template-ids:136863450 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l4:level1
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l4:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l4:level3
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l4:level4
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l4:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l4:level6
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l4:level7
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l4:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l4:level9
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l5
	{mso-list-id:1135415267;
	mso-list-type:hybrid;
	mso-list-template-ids:1768738010 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l5:level1
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l5:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l5:level3
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l5:level4
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l5:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l5:level6
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l5:level7
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l5:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l5:level9
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l6
	{mso-list-id:1472287558;
	mso-list-type:hybrid;
	mso-list-template-ids:-1073176384 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l6:level1
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l6:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:1.25in;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l6:level3
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:1.75in;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l6:level4
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:2.25in;
	text-indent:-.25in;
	font-family:Symbol;}
@list l6:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:2.75in;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l6:level6
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:3.25in;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l6:level7
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:3.75in;
	text-indent:-.25in;
	font-family:Symbol;}
@list l6:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:4.25in;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l6:level9
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:4.75in;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l7
	{mso-list-id:1735854396;
	mso-list-type:hybrid;
	mso-list-template-ids:-652055140 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l7:level1
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l7:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l7:level3
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l7:level4
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l7:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l7:level6
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l7:level7
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l7:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l7:level9
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l8
	{mso-list-id:1743603978;
	mso-list-type:hybrid;
	mso-list-template-ids:-1149740306 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l8:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l8:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l8:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l8:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l8:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l8:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l8:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l8:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l8:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l9
	{mso-list-id:1908950921;
	mso-list-type:hybrid;
	mso-list-template-ids:-698843176 339128176 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l9:level1
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;
	color:black;
	mso-themecolor:text1;}
@list l9:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l9:level3
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l9:level4
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l9:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l9:level6
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l9:level7
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l9:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l9:level9
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l10
	{mso-list-id:2026832563;
	mso-list-template-ids:1470028440;}
@list l10:level1
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l10:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l10:level3
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l10:level4
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l10:level5
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l10:level6
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l10:level7
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l10:level8
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l10:level9
	{mso-level-number-format:bullet;
	mso-level-text:_;
	mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin-top:0in;
	mso-para-margin-right:0in;
	mso-para-margin-bottom:8.0pt;
	mso-para-margin-left:0in;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:Calibri;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-font-kerning:1.0pt;
	mso-ligatures:standardcontextual;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1026"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-GB style='tab-interval:.5in'>

<div class=WordSection1>

<p class=MsoNormal align=center style='text-align:center'><b><span lang=EN-US
style='font-size:16.0pt;line-height:107%'>Environment Setup<o:p></o:p></span></b></p>

<p class=MsoListParagraphCxSpFirst style='text-indent:-.25in;line-height:150%;
mso-list:l0 level1 lfo7'><![if !supportLists]><span lang=EN-US
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:black;
mso-themecolor:text1'><span style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US>Download
&amp; install XAMPP </span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-.25in;line-height:150%;
mso-list:l0 level1 lfo7'><![if !supportLists]><span lang=EN-US
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:black;
mso-themecolor:text1'><span style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US>Check your
PHP version in terminal<span style='mso-spacerun:yes'>&nbsp;&nbsp; </span><b><i><span
style='color:#0070C0'>php -v</span></i><span style='color:#0070C0'> <o:p></o:p></span></b></span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-.25in;line-height:150%;
mso-list:l0 level1 lfo7'><![if !supportLists]><span lang=EN-US
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:black;
mso-themecolor:text1'><span style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US>Download
and install composer </span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-.25in;line-height:150%;
mso-list:l0 level1 lfo7'><![if !supportLists]><span lang=EN-US
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:black;
mso-themecolor:text1'><span style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US>Check
composer version in terminal <b><i><span style='color:#0070C0'>composer -v</span></i></b></span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-.25in;line-height:150%;
mso-list:l0 level1 lfo7'><![if !supportLists]><span lang=EN-US
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:black;
mso-themecolor:text1'><span style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US>Download
XDebug </span></p>

<p class=MsoListParagraphCxSpLast style='text-indent:-.25in;line-height:150%;
mso-list:l0 level1 lfo7'><![if !supportLists]><span lang=EN-US
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:black;
mso-themecolor:text1'><span style='mso-list:Ignore'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US>Download
VS code </span></p>

<p class=MsoNormal align=center style='text-align:center'><b><span lang=EN-US
style='font-size:16.0pt;line-height:107%'>XDebug Setup<o:p></o:p></span></b></p>

<p class=MsoListParagraphCxSpFirst style='text-indent:-.25in;line-height:150%;
mso-list:l9 level1 lfo4'><![if !supportLists]><span lang=EN-US
style='font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;color:black;mso-themecolor:text1'><span style='mso-list:Ignore'>á<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US>Paste XDebug dll file inside XAMPP/php/ext </span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-.25in;line-height:150%;
mso-list:l9 level1 lfo4'><![if !supportLists]><span lang=EN-US
style='font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;color:black;mso-themecolor:text1'><span style='mso-list:Ignore'>á<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US>Open php.ini and add properties </span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-.25in;line-height:150%;
mso-list:l9 level1 lfo4'><![if !supportLists]><span lang=EN-US
style='font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;color:black;mso-themecolor:text1;mso-bidi-font-weight:bold;mso-bidi-font-style:
italic'><span style='mso-list:Ignore'>á<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span class=GramE><b><i><span
lang=EN-US style='color:#0070C0'>xdebug.mode</span></i></b></span><b><i><span
lang=EN-US style='color:#0070C0'>=debug<o:p></o:p></span></i></b></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-.25in;line-height:150%;
mso-list:l9 level1 lfo4'><![if !supportLists]><span lang=EN-US
style='font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;color:black;mso-themecolor:text1;mso-bidi-font-weight:bold;mso-bidi-font-style:
italic'><span style='mso-list:Ignore'>á<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><b><i><span lang=EN-US
style='color:#0070C0'>xdebug.start_with_request=yes<o:p></o:p></span></i></b></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-.25in;line-height:150%;
mso-list:l9 level1 lfo4'><![if !supportLists]><span lang=EN-US
style='font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;color:black;mso-themecolor:text1;mso-bidi-font-weight:bold;mso-bidi-font-style:
italic'><span style='mso-list:Ignore'>á<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span class=GramE><b><i><span
lang=EN-US style='color:#0070C0'>xdebug.client</span></i></b></span><b><i><span
lang=EN-US style='color:#0070C0'>_port=9003<o:p></o:p></span></i></b></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-.25in;line-height:150%;
mso-list:l9 level1 lfo4'><![if !supportLists]><span lang=EN-US
style='font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;color:black;mso-themecolor:text1;mso-bidi-font-weight:bold;mso-bidi-font-style:
italic'><span style='mso-list:Ignore'>á<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span class=GramE><b><i><span
lang=EN-US style='color:#0070C0'>xdebug.client</span></i></b></span><b><i><span
lang=EN-US style='color:#0070C0'>_host = localhost<o:p></o:p></span></i></b></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-.25in;line-height:150%;
mso-list:l9 level1 lfo4'><![if !supportLists]><span lang=EN-US
style='font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;color:black;mso-themecolor:text1;mso-bidi-font-weight:bold;mso-bidi-font-style:
italic'><span style='mso-list:Ignore'>á<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><b><i><span lang=EN-US
style='color:#0070C0'>zend_extension=&quot;C:\xampp\php\ext\xdebug.dll&quot;<o:p></o:p></span></i></b></p>

<p class=MsoListParagraphCxSpLast style='text-indent:-.25in;line-height:150%;
mso-list:l9 level1 lfo4'><![if !supportLists]><span lang=EN-US
style='font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;color:black;mso-themecolor:text1'><span style='mso-list:Ignore'>á<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US>Again check PHP version in terminal <b><i><span
style='color:#0070C0'>php -v</span></i></b><span style='color:#0070C0'> </span></span></p>

<p class=MsoNormal align=center style='margin-left:.25in;text-align:center'><b><span
lang=EN-US style='font-size:14.0pt;line-height:107%'>VS Code Extensions for PHP<o:p></o:p></span></b></p>

<p class=MsoListParagraphCxSpFirst style='text-indent:-.25in;line-height:150%;
mso-list:l6 level1 lfo5'><![if !supportLists]><span lang=EN-US
style='font-size:10.0pt;line-height:150%;font-family:Symbol;mso-fareast-font-family:
Symbol;mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>á<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:10.0pt;line-height:150%'>PHP
Debug <o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-.25in;line-height:150%;
mso-list:l6 level1 lfo5'><![if !supportLists]><span lang=EN-US
style='font-size:10.0pt;line-height:150%;font-family:Symbol;mso-fareast-font-family:
Symbol;mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>á<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:10.0pt;line-height:150%'>PHP
IntelliSense <span style='mso-spacerun:yes'>&nbsp;</span><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-.25in;line-height:150%;
mso-list:l6 level1 lfo5'><![if !supportLists]><span lang=EN-US
style='font-size:10.0pt;line-height:150%;font-family:Symbol;mso-fareast-font-family:
Symbol;mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>á<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:10.0pt;line-height:150%'>PHP
Server <o:p></o:p></span></p>

<p class=MsoListParagraphCxSpLast style='text-indent:-.25in;line-height:150%;
mso-list:l6 level1 lfo5'><![if !supportLists]><span lang=EN-US
style='font-size:10.0pt;line-height:150%;font-family:Symbol;mso-fareast-font-family:
Symbol;mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>á<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
dir=LTR></span><span lang=EN-US style='font-size:10.0pt;line-height:150%'>MySQL
by Weijan Chen<o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><b><span lang=EN-US
style='font-size:14.0pt;line-height:107%'>Write your First PHP Code &amp; Run<o:p></o:p></span></b></p>

<p class=MsoListParagraphCxSpFirst style='text-align:justify;text-indent:-.25in;
line-height:150%;mso-list:l5 level1 lfo6'><![if !supportLists]><span
lang=EN-US style='font-size:10.0pt;line-height:150%;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>á<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US
style='font-size:10.0pt;line-height:150%;font-family:Roboto'>Write your first
php code echo <b><i><span style='color:#0070C0'>ÒHello PHPÓ </span></i></b><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-.25in;
line-height:150%;mso-list:l5 level1 lfo6'><![if !supportLists]><span
lang=EN-US style='font-size:10.0pt;line-height:150%;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>á<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US
style='font-size:10.0pt;line-height:150%;font-family:Roboto'>Run from terminal <span
class=GramE>command<span style='mso-spacerun:yes'>&nbsp; </span><b><i><span
style='color:#0070C0'>php</span></i></b></span><b><i><span style='color:#0070C0'>
hello.php</span></i></b><span style='color:#0070C0'> </span><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='text-align:justify;text-indent:-.25in;
line-height:150%;mso-list:l5 level1 lfo6'><![if !supportLists]><span
lang=EN-US style='font-size:10.0pt;line-height:150%;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;mso-font-kerning:
0pt;mso-ligatures:none'><span style='mso-list:Ignore'>á<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US
style='font-size:10.0pt;line-height:150%;font-family:Roboto'>Run from custom
server &amp; port </span><b><i><span lang=EN-US style='font-size:10.0pt;
line-height:150%;font-family:Roboto;mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:"Courier New";color:#0070C0;mso-font-kerning:0pt;
mso-ligatures:none'>php -S 127.0.0.1:8000 hello.php</span></i></b><span
lang=EN-US style='font-size:10.0pt;line-height:150%;font-family:Roboto;
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Courier New";
mso-font-kerning:0pt;mso-ligatures:none'><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpLast style='text-align:justify;text-indent:-.25in;
line-height:150%;mso-list:l5 level1 lfo6'><![if !supportLists]><span
lang=EN-US style='font-size:10.0pt;line-height:150%;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;mso-font-kerning:
0pt;mso-ligatures:none'><span style='mso-list:Ignore'>á<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span dir=LTR></span><span lang=EN-US
style='font-size:10.0pt;line-height:150%;font-family:Roboto;mso-fareast-font-family:
"Times New Roman";mso-bidi-font-family:"Courier New";mso-font-kerning:0pt;
mso-ligatures:none'>Run using PHP server extension <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:Roboto'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><b><span lang=EN-US
style='font-size:16.0pt;line-height:107%'>PHP Variable <o:p></o:p></span></b></p>

<p class=MsoNormal><strong><span lang=EN-US style='font-family:Calibri;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
Arial;mso-bidi-theme-font:minor-bidi'>Variable Naming Rules:<o:p></o:p></span></strong></p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     line-height:150%;mso-list:l10 level1 lfo8;tab-stops:list .5in'><span
     lang=EN-US style='font-size:10.0pt;line-height:150%;font-family:Roboto;
     mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
     mso-font-kerning:0pt;mso-ligatures:none'>Variable names in PHP start with
     a dollar sign ($).<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     line-height:150%;mso-list:l10 level1 lfo8;tab-stops:list .5in'><span
     lang=EN-US style='font-size:10.0pt;line-height:150%;font-family:Roboto;
     mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
     mso-font-kerning:0pt;mso-ligatures:none'>The name must begin with a letter
     or underscore (_), followed by letters, numbers, or underscores.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     line-height:150%;mso-list:l10 level1 lfo8;tab-stops:list .5in'><span
     lang=EN-US style='font-size:10.0pt;line-height:150%;font-family:Roboto;
     mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
     mso-font-kerning:0pt;mso-ligatures:none'>Variable names are
     case-sensitive, meaning </span><b><span lang=EN-US style='font-size:10.0pt;
     line-height:150%;font-family:Roboto;mso-fareast-font-family:"Times New Roman";
     mso-bidi-font-family:"Courier New";color:#0070C0;mso-font-kerning:0pt;
     mso-ligatures:none'>$myVariable</span></b><span lang=EN-US
     style='font-size:10.0pt;line-height:150%;font-family:Roboto;mso-fareast-font-family:
     "Times New Roman";mso-bidi-font-family:"Times New Roman";color:#0070C0;
     mso-font-kerning:0pt;mso-ligatures:none'> </span><span lang=EN-US
     style='font-size:10.0pt;line-height:150%;font-family:Roboto;mso-fareast-font-family:
     "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-font-kerning:
     0pt;mso-ligatures:none'>and </span><b><span lang=EN-US style='font-size:
     10.0pt;line-height:150%;font-family:Roboto;mso-fareast-font-family:"Times New Roman";
     mso-bidi-font-family:"Courier New";color:#0070C0;mso-font-kerning:0pt;
     mso-ligatures:none'>$myvariable</span></b><span lang=EN-US
     style='font-size:10.0pt;line-height:150%;font-family:Roboto;mso-fareast-font-family:
     "Times New Roman";mso-bidi-font-family:"Times New Roman";color:#0070C0;
     mso-font-kerning:0pt;mso-ligatures:none'> </span><span lang=EN-US
     style='font-size:10.0pt;line-height:150%;font-family:Roboto;mso-fareast-font-family:
     "Times New Roman";mso-bidi-font-family:"Times New Roman";mso-font-kerning:
     0pt;mso-ligatures:none'>are treated as different variables.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     line-height:150%;mso-list:l10 level1 lfo8;tab-stops:list .5in'><span
     lang=EN-US style='font-size:10.0pt;line-height:150%;font-family:Roboto;
     mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
     mso-font-kerning:0pt;mso-ligatures:none'>PHP does not require you to
     declare a variable before using it; it automatically creates the variable
     when you assign a value to it.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:150%'><strong><span lang=EN-US style='font-family:Calibri;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
Arial;mso-bidi-theme-font:minor-bidi'>Variable Assignment:<o:p></o:p></span></strong></p>

<pre><span class=hljs-variable><span lang=EN-US>$name</span></span><code><span
lang=EN-US> = </span></code><span class=hljs-string><span lang=EN-US>&quot;John&quot;</span></span><code><span
lang=EN-US>;<o:p></o:p></span></code></pre><pre><span class=hljs-variable><span
lang=EN-US>$age</span></span><code><span lang=EN-US> = </span></code><span
class=hljs-number><span lang=EN-US>30</span></span><code><span lang=EN-US>;<o:p></o:p></span></code></pre><pre><code><span
lang=EN-US><o:p>&nbsp;</o:p></span></code></pre><pre><code><span lang=EN-US><o:p>&nbsp;</o:p></span></code></pre><pre><strong><span
lang=EN-US style='font-family:"Courier New"'>Variable Types:<o:p></o:p></span></strong></pre><pre><strong><span
lang=EN-US style='font-family:"Courier New"'><o:p>&nbsp;</o:p></span></strong></pre><pre><span
lang=EN-US style='font-family:Roboto'>PHP is a loosely typed language, which means you don't need to declare the data type of a variable explicitly. PHP determines the data type based on the value assigned to it. Common data types in PHP include:<o:p></o:p></span></pre>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     line-height:normal;mso-list:l2 level1 lfo9;tab-stops:list .5in'><span
     lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
     mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
     none'>Strings: Textual data enclosed in single ('') or double
     (&quot;&quot;) quotes.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     line-height:normal;mso-list:l2 level1 lfo9;tab-stops:list .5in'><span
     lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
     mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
     none'>Integers: Whole numbers.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     line-height:normal;mso-list:l2 level1 lfo9;tab-stops:list .5in'><span
     lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
     mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
     none'>Floats (or Doubles): Numbers with decimal points.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     line-height:normal;mso-list:l2 level1 lfo9;tab-stops:list .5in'><span
     lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
     mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
     none'>Booleans: True or false values.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     line-height:normal;mso-list:l2 level1 lfo9;tab-stops:list .5in'><span
     lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
     mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
     none'>Arrays: Ordered collections of data.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     line-height:normal;mso-list:l2 level1 lfo9;tab-stops:list .5in'><span
     lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
     mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
     none'>Objects: Instances of user-defined classes.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     line-height:normal;mso-list:l2 level1 lfo9;tab-stops:list .5in'><span
     lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
     mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
     none'>Null: Represents a variable with no value.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
none'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
none'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
none'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
none'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
none'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
none'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
none'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:150%'><b><span lang=EN-US style='font-size:10.0pt;line-height:150%;
font-family:Roboto;mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
"Times New Roman";mso-font-kerning:0pt;mso-ligatures:none'>Variable Types:<o:p></o:p></span></b></p>

<pre><span class=hljs-variable><span lang=EN-US>$name</span></span><code><span
lang=EN-US> = </span></code><span class=hljs-string><span lang=EN-US>&quot;John Smith&quot;</span></span><code><span
lang=EN-US>;</span></code></pre><pre><span class=hljs-variable><span
lang=EN-US>$age</span></span><code><span lang=EN-US> = </span></code><span
class=hljs-number><span lang=EN-US>30</span></span><code><span lang=EN-US>;</span></code></pre><pre><span
class=hljs-variable><span lang=EN-US>$price</span></span><code><span
lang=EN-US> = </span></code><span class=hljs-number><span lang=EN-US>19.99</span></span><code><span
lang=EN-US>;</span></code></pre><pre><span class=hljs-variable><span
lang=EN-US>$isStudent</span></span><code><span lang=EN-US> = </span></code><span
class=hljs-literal><span lang=EN-US>true</span></span><code><span lang=EN-US>;</span></code></pre><pre><span
class=hljs-variable><span lang=EN-US>$fruits</span></span><code><span
lang=EN-US> = </span></code><span class=GramE><span class=hljs-keyword><span
lang=EN-US>array</span></span><code><span lang=EN-US>(</span></code></span><span
class=hljs-string><span lang=EN-US>&quot;apple&quot;</span></span><code><span
lang=EN-US>, </span></code><span class=hljs-string><span lang=EN-US>&quot;banana&quot;</span></span><code><span
lang=EN-US>, </span></code><span class=hljs-string><span lang=EN-US>&quot;cherry&quot;</span></span><code><span
lang=EN-US>);<o:p></o:p></span></code></pre><pre><span lang=EN-US><o:p>&nbsp;</o:p></span></pre><pre><span
class=hljs-keyword><span lang=EN-US>class</span></span><span class=hljs-class><span
lang=EN-US> </span></span><span class=hljs-title><span lang=EN-US>Person</span></span><span
class=hljs-class><span lang=EN-US> </span></span><code><span lang=EN-US>{<o:p></o:p></span></code></pre><pre><code><span
lang=EN-US><span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span></span></code><span
class=hljs-keyword><span lang=EN-US>public</span></span><code><span lang=EN-US> </span></code><span
class=hljs-variable><span lang=EN-US>$name</span></span><code><span lang=EN-US>;<o:p></o:p></span></code></pre><pre><code><span
lang=EN-US><span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span></span></code><span
class=hljs-keyword><span lang=EN-US>public</span></span><code><span lang=EN-US> </span></code><span
class=hljs-variable><span lang=EN-US>$age</span></span><code><span lang=EN-US>;<o:p></o:p></span></code></pre><pre><code><span
lang=EN-US>}<o:p></o:p></span></code></pre><pre><code><span lang=EN-US><o:p>&nbsp;</o:p></span></code></pre><pre><span
class=hljs-variable><span lang=EN-US>$person1</span></span><code><span
lang=EN-US> = </span></code><span class=hljs-keyword><span lang=EN-US>new</span></span><code><span
lang=EN-US> </span></code><span class=GramE><span class=hljs-title><span
lang=EN-US>Person</span></span><code><span lang=EN-US>(</span></code></span><code><span
lang=EN-US>);<o:p></o:p></span></code></pre><pre><span class=hljs-variable><span
lang=EN-US>$person1</span></span><code><span lang=EN-US>-&gt;name = </span></code><span
class=hljs-string><span lang=EN-US>&quot;Alice&quot;</span></span><code><span
lang=EN-US>;<o:p></o:p></span></code></pre><pre><span class=hljs-variable><span
lang=EN-US>$person1</span></span><code><span lang=EN-US>-&gt;age = </span></code><span
class=hljs-number><span lang=EN-US>25</span></span><code><span lang=EN-US>;<o:p></o:p></span></code></pre><pre><code><span
lang=EN-US><o:p>&nbsp;</o:p></span></code></pre><pre><span lang=EN-US><o:p>&nbsp;</o:p></span></pre><pre><span
class=hljs-variable><span lang=EN-US>$noValue</span></span><code><span
lang=EN-US> = </span></code><span class=hljs-literal><span lang=EN-US>null</span></span><code><span
lang=EN-US>;</span></code></pre>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:150%'><b><span lang=EN-US style='font-size:10.0pt;line-height:150%;
font-family:Roboto;mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
"Times New Roman";mso-font-kerning:0pt;mso-ligatures:none'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center;line-height:normal'><b><span lang=EN-US
style='font-size:12.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";mso-font-kerning:0pt;mso-ligatures:none'>Variable Scope:<o:p></o:p></span></b></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal'><span lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
none'>PHP variables have different scopes, which determine where the variable
can be accessed. The main variable scopes in PHP are:<b><o:p></o:p></b></span></p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     line-height:normal;mso-list:l3 level1 lfo10;tab-stops:list .5in'><b><span
     lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
     mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
     none'>Local Scope:</span></b><span lang=EN-US style='font-size:12.0pt;
     font-family:"Times New Roman";mso-fareast-font-family:"Times New Roman";
     mso-font-kerning:0pt;mso-ligatures:none'> Variables declared within a
     function are only accessible within that function.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     line-height:normal;mso-list:l3 level1 lfo10;tab-stops:list .5in'><b><span
     lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
     mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
     none'>Global Scope:</span></b><span lang=EN-US style='font-size:12.0pt;
     font-family:"Times New Roman";mso-fareast-font-family:"Times New Roman";
     mso-font-kerning:0pt;mso-ligatures:none'> Variables declared outside of
     any function can be accessed anywhere in the script.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     line-height:normal;mso-list:l3 level1 lfo10;tab-stops:list .5in'><b><span
     lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
     mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
     none'>Superglobals:</span></b><span lang=EN-US style='font-size:12.0pt;
     font-family:"Times New Roman";mso-fareast-font-family:"Times New Roman";
     mso-font-kerning:0pt;mso-ligatures:none'> Special global arrays like </span><span
     lang=EN-US style='font-size:10.0pt;font-family:"Courier New";mso-fareast-font-family:
     "Times New Roman";mso-font-kerning:0pt;mso-ligatures:none'>$_GET</span><span
     lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman";
     mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
     none'>, </span><span lang=EN-US style='font-size:10.0pt;font-family:"Courier New";
     mso-fareast-font-family:"Times New Roman";mso-font-kerning:0pt;mso-ligatures:
     none'>$_POST</span><span lang=EN-US style='font-size:12.0pt;font-family:
     "Times New Roman";mso-fareast-font-family:"Times New Roman";mso-font-kerning:
     0pt;mso-ligatures:none'>, </span><span lang=EN-US style='font-size:10.0pt;
     font-family:"Courier New";mso-fareast-font-family:"Times New Roman";
     mso-font-kerning:0pt;mso-ligatures:none'>$_SESSION</span><span lang=EN-US
     style='font-size:12.0pt;font-family:"Times New Roman";mso-fareast-font-family:
     "Times New Roman";mso-font-kerning:0pt;mso-ligatures:none'>, etc., which are
     accessible from anywhere in the script.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><b><span lang=EN-US style='font-size:16.0pt;line-height:
107%'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal><strong><span lang=EN-US style='font-family:Calibri;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
Arial;mso-bidi-theme-font:minor-bidi'>Local Scope:</span></strong><span
lang=EN-US> Variables declared within a function have local scope, meaning they
are only accessible within that function.</span></p>

<pre><span class=hljs-keyword><span lang=EN-US>function</span></span><span
class=hljs-function><span lang=EN-US> </span></span><span class=GramE><span
class=hljs-title><span lang=EN-US>greet</span></span><span class=hljs-function><span
lang=EN-US>(</span></span></span><span class=hljs-function><span lang=EN-US>) </span></span><code><span
lang=EN-US>{<o:p></o:p></span></code></pre><pre><code><span lang=EN-US><span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span></span></code><span
class=hljs-variable><span lang=EN-US>$message</span></span><code><span
lang=EN-US> = </span></code><span class=hljs-string><span lang=EN-US>&quot;Hello, World!&quot;</span></span><code><span
lang=EN-US>;<o:p></o:p></span></code></pre><pre><code><span lang=EN-US><span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span></span></code><span
class=hljs-keyword><span lang=EN-US>echo</span></span><code><span lang=EN-US> </span></code><span
class=hljs-variable><span lang=EN-US>$message</span></span><code><span
lang=EN-US>;<o:p></o:p></span></code></pre><pre><code><span lang=EN-US>}<o:p></o:p></span></code></pre><pre><code><span
lang=EN-US><o:p>&nbsp;</o:p></span></code></pre><pre><span class=GramE><span
class=hljs-title><span lang=EN-US>greet</span></span><code><span lang=EN-US>(</span></code></span><code><span
lang=EN-US>); </span></code><span class=hljs-comment><span lang=EN-US>/</span></span></pre>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><strong><span lang=EN-US style='font-family:Calibri;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
Arial;mso-bidi-theme-font:minor-bidi'>Global Scope:</span></strong><span
lang=EN-US> Variables declared outside of any function have global scope and
can be accessed from anywhere in your script.</span></p>

<pre><span lang=EN-US><span style='mso-spacerun:yes'>&nbsp;</span><span
class=hljs-variable>$name</span><code> = </code><span class=hljs-string>&quot;John&quot;</span><code>;<o:p></o:p></code></span></pre><pre><code><span
lang=EN-US><o:p>&nbsp;</o:p></span></code></pre><pre><span class=hljs-keyword><span
lang=EN-US>function</span></span><span class=hljs-function><span lang=EN-US> </span></span><span
class=GramE><span class=hljs-title><span lang=EN-US>greet</span></span><span
class=hljs-function><span lang=EN-US>(</span></span></span><span
class=hljs-function><span lang=EN-US>) </span></span><code><span lang=EN-US>{<o:p></o:p></span></code></pre><pre><code><span
lang=EN-US><span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span></span></code><span
class=hljs-keyword><span lang=EN-US>global</span></span><code><span lang=EN-US> </span></code><span
class=hljs-variable><span lang=EN-US>$name</span></span><code><span lang=EN-US>;<o:p></o:p></span></code></pre><pre><code><span
lang=EN-US><span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span></span></code><span
class=hljs-keyword><span lang=EN-US>echo</span></span><code><span lang=EN-US> </span></code><span
class=hljs-string><span lang=EN-US>&quot;Hello, </span></span><span
class=hljs-subst><span lang=EN-US>$name</span></span><span class=hljs-string><span
lang=EN-US>!&quot;</span></span><code><span lang=EN-US>;<o:p></o:p></span></code></pre><pre><code><span
lang=EN-US>}<o:p></o:p></span></code></pre><pre><code><span lang=EN-US><o:p>&nbsp;</o:p></span></code></pre><pre><span
class=GramE><span class=hljs-title><span lang=EN-US>greet</span></span><code><span
lang=EN-US>(</span></code></span><code><span lang=EN-US>); </span></code><span
class=hljs-comment><span lang=EN-US>// Outputs: Hello, John!</span></span><code><span
lang=EN-US><o:p></o:p></span></code></pre><pre><code><span lang=EN-US><o:p>&nbsp;</o:p></span></code></pre><pre><span
class=hljs-comment><span lang=EN-US>// You can also access $name outside of the function.</span></span><code><span
lang=EN-US><o:p></o:p></span></code></pre><pre><span class=hljs-keyword><span
lang=EN-US>echo</span></span><code><span lang=EN-US> </span></code><span
class=hljs-string><span lang=EN-US>&quot;Outside function: </span></span><span
class=hljs-subst><span lang=EN-US>$name</span></span><span class=hljs-string><span
lang=EN-US>&quot;</span></span><code><span lang=EN-US>; </span></code><span
class=hljs-comment><span lang=EN-US>// Outputs: Outside function: John</span></span><code><span
lang=EN-US><o:p></o:p></span></code></pre>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><code><span lang=EN-US style='font-size:10.0pt;line-height:
107%;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin'>$name</span></code><span
lang=EN-US> is declared outside the </span><span class=GramE><code><span
lang=EN-US style='font-size:10.0pt;line-height:107%;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin'>greet(</span></code></span><code><span
lang=EN-US style='font-size:10.0pt;line-height:107%;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin'>)</span></code><span lang=EN-US>
function and is made accessible inside the function using the </span><code><span
lang=EN-US style='font-size:10.0pt;line-height:107%;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin'>global</span></code><span
lang=EN-US> keyword.</span></p>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><code><b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin'>PHP Constant<o:p></o:p></span></b></code></p>

<p class=MsoNormal><span lang=EN-US>PHP, constants are like variables but with
a significant difference: their values cannot be changed after they are
defined. Constants are used to store values that should remain the same
throughout your PHP script.</span></p>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><strong><span lang=EN-US style='font-family:Calibri;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
Arial;mso-bidi-theme-font:minor-bidi'>Defining Constants:</span></strong><span
lang=EN-US> Constants are defined using the </span><span class=GramE><code><span
lang=EN-US style='font-size:10.0pt;line-height:107%;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin'>define(</span></code></span><code><span
lang=EN-US style='font-size:10.0pt;line-height:107%;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin'>)</span></code><span lang=EN-US>
function or the </span><code><span lang=EN-US style='font-size:10.0pt;
line-height:107%;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin'>const</span></code><span
lang=EN-US> keyword. The </span><span class=GramE><code><span lang=EN-US
style='font-size:10.0pt;line-height:107%;mso-fareast-font-family:Calibri;
mso-fareast-theme-font:minor-latin'>define(</span></code></span><code><span
lang=EN-US style='font-size:10.0pt;line-height:107%;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin'>)</span></code><span lang=EN-US>
function is typically used for defining global constants, while the </span><code><span
lang=EN-US style='font-size:10.0pt;line-height:107%;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin'>const</span></code><span
lang=EN-US> keyword is used for class constants.</span></p>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<pre><span class=hljs-comment><span lang=EN-US>// Using <span class=GramE>define(</span>) for global constants</span></span><code><span
lang=EN-US><o:p></o:p></span></code></pre><pre><span class=GramE><span
class=hljs-title><span lang=EN-US>define</span></span><code><span lang=EN-US>(</span></code></span><span
class=hljs-string><span lang=EN-US>&quot;SITE_NAME&quot;</span></span><code><span
lang=EN-US>, </span></code><span class=hljs-string><span lang=EN-US>&quot;My Website&quot;</span></span><code><span
lang=EN-US>);<o:p></o:p></span></code></pre><pre><span class=GramE><span
class=hljs-title><span lang=EN-US>define</span></span><code><span lang=EN-US>(</span></code></span><span
class=hljs-string><span lang=EN-US>&quot;MAX_LOGIN_ATTEMPTS&quot;</span></span><code><span
lang=EN-US>, </span></code><span class=hljs-number><span lang=EN-US>3</span></span><code><span
lang=EN-US>);<o:p></o:p></span></code></pre><pre><code><span lang=EN-US><o:p>&nbsp;</o:p></span></code></pre><pre><span
class=hljs-comment><span lang=EN-US>// Using const for class constants</span></span><code><span
lang=EN-US><o:p></o:p></span></code></pre><pre><span class=hljs-keyword><span
lang=EN-US>class</span></span><span class=hljs-class><span lang=EN-US> </span></span><span
class=hljs-title><span lang=EN-US>MathConstants</span></span><span
class=hljs-class><span lang=EN-US> </span></span><code><span lang=EN-US>{<o:p></o:p></span></code></pre><pre><code><span
lang=EN-US><span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span></span></code><span
class=hljs-keyword><span lang=EN-US>const</span></span><code><span lang=EN-US> </span></code><span
class=hljs-variable><span lang=EN-US>PI</span></span><code><span lang=EN-US> = </span></code><span
class=hljs-number><span lang=EN-US>3.14159265359</span></span><code><span
lang=EN-US>;<o:p></o:p></span></code></pre><pre><code><span lang=EN-US>}<o:p></o:p></span></code></pre><pre><span
lang=EN-US><o:p>&nbsp;</o:p></span></pre>

<p class=MsoNormal><strong><span lang=EN-US style='font-family:Calibri;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
Arial;mso-bidi-theme-font:minor-bidi'>Accessing Constants:<o:p></o:p></span></strong></p>

<p class=MsoNormal><span lang=EN-US>You can access constants in the same way
you access variables, but without the dollar sign ($) before the constant name.</span></p>

<pre><span class=hljs-keyword><span lang=EN-US>echo</span></span><code><span
lang=EN-US> SITE_NAME; </span></code><span class=hljs-comment><span lang=EN-US>// Outputs: My Website</span></span><code><span
lang=EN-US><o:p></o:p></span></code></pre><pre><span class=hljs-keyword><span
lang=EN-US>echo</span></span><code><span lang=EN-US> MAX_LOGIN_ATTEMPTS; </span></code><span
class=hljs-comment><span lang=EN-US>// Outputs: 3</span></span><code><span
lang=EN-US><o:p></o:p></span></code></pre><pre><code><span lang=EN-US><o:p>&nbsp;</o:p></span></code></pre><pre><span
class=hljs-keyword><span lang=EN-US>echo</span></span><code><span lang=EN-US> </span></code><span
class=GramE><span class=hljs-title><span lang=EN-US>MathConstants</span></span><code><span
lang=EN-US>::</span></code></span><span class=hljs-variable><span lang=EN-US>PI</span></span><code><span
lang=EN-US>; </span></code><span class=hljs-comment><span lang=EN-US>// Outputs: 3.14159265359</span></span><code><span
lang=EN-US><o:p></o:p></span></code></pre>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><b><span lang=EN-US
style='font-size:14.0pt;line-height:107%'>PHP Comments<o:p></o:p></span></b></p>

<p class=MsoNormal><span lang=EN-US>PHP, comments are used to annotate your
code with explanatory text that is not executed as part of the program.
Comments are ignored by the PHP interpreter and are solely for human readers to
understand and document the code. PHP supports two types of comments:
single-line comments and multi-line comments.</span></p>

<p class=MsoNormal><strong><span lang=EN-US style='font-family:Calibri;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
Arial;mso-bidi-theme-font:minor-bidi'>Single-Line Comments:</span></strong><span
lang=EN-US> Single-line comments are used for adding comments on a single line.
They begin with a double forward slash (</span><code><span lang=EN-US
style='font-size:10.0pt;line-height:107%;mso-fareast-font-family:Calibri;
mso-fareast-theme-font:minor-latin'>//</span></code><span lang=EN-US>) and
continue until the end of the line.</span></p>

<pre><span class=hljs-comment><span lang=EN-US>// This is a single-line comment</span></span></pre>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><strong><span lang=EN-US style='font-family:Calibri;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:
Arial;mso-bidi-theme-font:minor-bidi'>Multi-Line Comments:<o:p></o:p></span></strong></p>

<pre><span class=hljs-comment><span lang=EN-US>/*<o:p></o:p></span></span></pre><pre><span
class=hljs-comment><span lang=EN-US>This is a multi-line comment.<o:p></o:p></span></span></pre><pre><span
class=hljs-comment><span lang=EN-US>It can span multiple lines.<o:p></o:p></span></span></pre><pre><span
class=hljs-comment><span lang=EN-US>*/</span></span><code><span lang=EN-US><o:p></o:p></span></code></pre>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><b><span lang=EN-US
style='font-size:14.0pt;line-height:107%'>PHP printf<o:p></o:p></span></b></p>

<p class=MsoNormal><span lang=EN-US>PHP, the </span><code><span lang=EN-US
style='font-size:10.0pt;line-height:107%;mso-fareast-font-family:Calibri;
mso-fareast-theme-font:minor-latin'>printf</span></code><span lang=EN-US>
function is used for formatted output. It allows you to print formatted strings
with placeholders that can be replaced by values.</span></p>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<pre><span class=hljs-variable><span lang=EN-US>$name</span></span><code><span
lang=EN-US> = </span></code><span class=hljs-string><span lang=EN-US>&quot;Alice&quot;</span></span><code><span
lang=EN-US>;<o:p></o:p></span></code></pre><pre><span class=hljs-variable><span
lang=EN-US>$age</span></span><code><span lang=EN-US> = </span></code><span
class=hljs-number><span lang=EN-US>25</span></span><code><span lang=EN-US>;<o:p></o:p></span></code></pre><pre><code><span
lang=EN-US><o:p>&nbsp;</o:p></span></code></pre><pre><span class=GramE><span
class=hljs-title><span lang=EN-US>printf</span></span><code><span lang=EN-US>(</span></code></span><span
class=hljs-string><span lang=EN-US>&quot;Name: %s, Age: %d&quot;</span></span><code><span
lang=EN-US>, </span></code><span class=hljs-variable><span lang=EN-US>$name</span></span><code><span
lang=EN-US>, </span></code><span class=hljs-variable><span lang=EN-US>$age</span></span><code><span
lang=EN-US>);<o:p></o:p></span></code></pre><pre><span lang=EN-US><o:p>&nbsp;</o:p></span></pre>

<p class=MsoNormal><code><span lang=EN-US style='font-size:10.0pt;line-height:
107%;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin'>Here
%s</span></code><span lang=EN-US> is a placeholder for a string, and </span><code><span
lang=EN-US style='font-size:10.0pt;line-height:107%;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin'>%d</span></code><span lang=EN-US>
is a placeholder for an integer. The </span><code><span lang=EN-US
style='font-size:10.0pt;line-height:107%;mso-fareast-font-family:Calibri;
mso-fareast-theme-font:minor-latin'>printf</span></code><span lang=EN-US>
function replaces these placeholders with the values of </span><code><span
lang=EN-US style='font-size:10.0pt;line-height:107%;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin'>$name</span></code><span
lang=EN-US> and </span><code><span lang=EN-US style='font-size:10.0pt;
line-height:107%;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin'>$age</span></code><span
lang=EN-US>,</span></p>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><b><span lang=EN-US>PHP
printf placeholders<o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><span lang=EN-US><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal><code><span lang=EN-US style='font-size:10.0pt;line-height:
107%;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin'>%s</span></code><span
lang=EN-US> is used for inserting strings into the formatted output.</span></p>

<p class=MsoNormal><span lang=EN-US>$name = &quot;Alice&quot;;</span></p>

<p class=MsoNormal><span class=GramE><span lang=EN-US>printf(</span></span><span
lang=EN-US>&quot;Name: %s&quot;, $name);</span></p>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><code><span lang=EN-US style='font-size:10.0pt;line-height:
107%;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin'>%d</span></code><span
lang=EN-US> or </span><code><span lang=EN-US style='font-size:10.0pt;
line-height:107%;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin'>%i</span></code><span
lang=EN-US> is used for inserting signed decimal integers into the formatted
output.</span></p>

<pre><span class=hljs-variable><span lang=EN-US>$age</span></span><code><span
lang=EN-US> = </span></code><span class=hljs-number><span lang=EN-US>25</span></span><code><span
lang=EN-US>;<o:p></o:p></span></code></pre><pre><span class=GramE><span
class=hljs-title><span lang=EN-US>printf</span></span><code><span lang=EN-US>(</span></code></span><span
class=hljs-string><span lang=EN-US>&quot;Age: %d&quot;</span></span><code><span
lang=EN-US>, </span></code><span class=hljs-variable><span lang=EN-US>$age</span></span><code><span
lang=EN-US>);</span></code></pre>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><code><span lang=EN-US style='font-size:10.0pt;line-height:
107%;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin'>%f</span></code><span
lang=EN-US> is used for inserting floating-point (decimal) numbers into the
formatted output.</span></p>

<pre><span class=hljs-variable><span lang=EN-US>$price</span></span><code><span
lang=EN-US> = </span></code><span class=hljs-number><span lang=EN-US>19.99</span></span><code><span
lang=EN-US>;<o:p></o:p></span></code></pre><pre><span class=GramE><span
class=hljs-title><span lang=EN-US>printf</span></span><code><span lang=EN-US>(</span></code></span><span
class=hljs-string><span lang=EN-US>&quot;Price: %.2f&quot;</span></span><code><span
lang=EN-US>, </span></code><span class=hljs-variable><span lang=EN-US>$price</span></span><code><span
lang=EN-US>);</span></code></pre>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><code><span lang=EN-US style='font-size:10.0pt;line-height:
107%;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin'>%x</span></code><span
lang=EN-US> is used for inserting lowercase hexadecimal numbers into the
formatted output.</span></p>

<pre><span class=hljs-variable><span lang=EN-US>$hexValue</span></span><code><span
lang=EN-US> = </span></code><span class=hljs-number><span lang=EN-US>255</span></span><code><span
lang=EN-US>;<o:p></o:p></span></code></pre><pre><span class=GramE><span
class=hljs-title><span lang=EN-US>printf</span></span><code><span lang=EN-US>(</span></code></span><span
class=hljs-string><span lang=EN-US>&quot;Hex Value: %x&quot;</span></span><code><span
lang=EN-US>, </span></code><span class=hljs-variable><span lang=EN-US>$hexValue</span></span><code><span
lang=EN-US>);</span></code></pre>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;line-height:107%'>%X
- Uppercase Hexadecimal Number:<o:p></o:p></span></p>

<pre><span class=hljs-variable><span lang=EN-US>$hexValue</span></span><code><span
lang=EN-US> = </span></code><span class=hljs-number><span lang=EN-US>255</span></span><code><span
lang=EN-US>;<o:p></o:p></span></code></pre><pre><span class=GramE><span
class=hljs-title><span lang=EN-US>printf</span></span><code><span lang=EN-US>(</span></code></span><span
class=hljs-string><span lang=EN-US>&quot;Hex Value: %X&quot;</span></span><code><span
lang=EN-US>, </span></code><span class=hljs-variable><span lang=EN-US>$hexValue</span></span><code><span
lang=EN-US>);</span></code></pre>

<p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><b><span lang=EN-US
style='font-size:12.0pt;line-height:107%'>PHP sprint<o:p></o:p></span></b></p>

<p class=MsoNormal><span lang=EN-US>In PHP, the </span><code><span lang=EN-US
style='font-size:10.0pt;line-height:107%;mso-fareast-font-family:Calibri;
mso-fareast-theme-font:minor-latin'>sprintf</span></code><span lang=EN-US>
function is used to format a string according to a specified format and returns
the formatted string. It is similar to the </span><code><span lang=EN-US
style='font-size:10.0pt;line-height:107%;mso-fareast-font-family:Calibri;
mso-fareast-theme-font:minor-latin'>printf</span></code><span lang=EN-US>
function, but instead of printing the formatted string, </span><code><span
lang=EN-US style='font-size:10.0pt;line-height:107%;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin'>sprintf</span></code><span
lang=EN-US> allows you to store the formatted result in a variable or use it in
further operations.</span></p>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<pre><span class=hljs-variable><span lang=EN-US>$name</span></span><code><span
lang=EN-US> = </span></code><span class=hljs-string><span lang=EN-US>&quot;Alice&quot;</span></span><code><span
lang=EN-US>;<o:p></o:p></span></code></pre><pre><span class=hljs-variable><span
lang=EN-US>$age</span></span><code><span lang=EN-US> = </span></code><span
class=hljs-number><span lang=EN-US>25</span></span><code><span lang=EN-US>;<o:p></o:p></span></code></pre><pre><code><span
lang=EN-US><o:p>&nbsp;</o:p></span></code></pre><pre><span class=hljs-variable><span
lang=EN-US>$formattedString</span></span><code><span lang=EN-US> = </span></code><span
class=GramE><span class=hljs-title><span lang=EN-US>sprintf</span></span><code><span
lang=EN-US>(</span></code></span><span class=hljs-string><span lang=EN-US>&quot;Name: %s, Age: %d&quot;</span></span><code><span
lang=EN-US>, </span></code><span class=hljs-variable><span lang=EN-US>$name</span></span><code><span
lang=EN-US>, </span></code><span class=hljs-variable><span lang=EN-US>$age</span></span><code><span
lang=EN-US>);<o:p></o:p></span></code></pre><pre><span class=hljs-keyword><span
lang=EN-US>echo</span></span><code><span lang=EN-US> </span></code><span
class=hljs-variable><span lang=EN-US>$formattedString</span></span><code><span
lang=EN-US>;</span></code></pre>

<p class=MsoNormal><b><span lang=EN-US style='font-size:12.0pt;line-height:
107%'><o:p>&nbsp;</o:p></span></b></p>

</div>

</body>

</html>
