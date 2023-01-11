import {PanelBody, TextControl, Button, ResponsiveWrapper} from '@wordpress/components';
import {BlockEditProps} from "@wordpress/blocks";
import {InspectorControls, useBlockProps, MediaUpload, MediaUploadCheck} from "@wordpress/block-editor";

export default function Edit({attributes, setAttributes}: BlockEditProps<any>) {
    const {items = []} = attributes;

    function handleChangeText(value: string, idx: number) {
        const currentItem = items[idx]
        items[idx] = {...currentItem, title: value}
        setAttributes({items: [...items]})
    }

    function handleAddMore() {
        const {items = []} = attributes
        setAttributes({items: [...items, {title: ''}]})
    }

    const onSelectMedia = (media: any, idx: any) => {
        const currentItem = items[idx]
        items[idx] = {...currentItem, image: {url: media.url, id: media.id}}
        setAttributes({items: [...items]})
    }

    return (
        <>
            <InspectorControls>
                <PanelBody>
                    {items.length > 0 && items?.map((item: any, index: number) => (
                        <div key={index} style={{padding: '15px', border: '1px solid #ccc', marginTop: '20px'}}>
                            <TextControl value={item?.title}
                                         onChange={(value) => handleChangeText(value, index)}/>
                            <MediaUploadCheck>
                                <MediaUpload onSelect={(media) => onSelectMedia(media, index)} allowedTypes={['image']}
                                             value={item?.image?.id}
                                             render={({open}) => {

                                                 if (item?.image?.url) {
                                                     return (
                                                         <img src={item?.image?.url} width={'100%'} height={'300px'}/>
                                                     )
                                                 }

                                                 return (<span onClick={open}
                                                     style={{padding: '15px', width: '100%', textAlign: 'center'}}>Selecionar imagem</span>)
                                             }
                                             }/>
                            </MediaUploadCheck>
                        </div>
                    ))}
                    <Button width={'100%'} style={{marginTop: '10px'}} variant={'secondary'} onClick={handleAddMore}>Adicionar
                        item</Button>
                </PanelBody>
            </InspectorControls>
            <h1 {...useBlockProps()}>bloco de teste</h1>
        </>
    )
}
