/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import {useState} from '@wordpress/element'

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import {InspectorControls, useBlockProps} from '@wordpress/block-editor';
import {ColorPicker, PanelBody, PanelRow} from '@wordpress/components';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

// @ts-ignore
/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit({attributes, setAttributes}) {
    function handleColor(value: any) {
        setAttributes({color: value.hex})
    }

    return (
        <>
            <InspectorControls>
                <PanelBody title="Configurações"
                           initialOpen={false}>
                    <PanelRow>
                        <ColorPicker color={attributes.color} onChangeComplete={handleColor}/>
                    </PanelRow>
                </PanelBody>
            </InspectorControls>
            <p {...useBlockProps()} style={{border: `1px solid ${attributes.color}`}}>
                olá mundo
            </p>
        </>
    );
}
