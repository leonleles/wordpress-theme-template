import {createHigherOrderComponent} from '@wordpress/compose' ;
import {InspectorControls} from '@wordpress/block-editor'
import {PanelBody, TabPanel} from '@wordpress/components'

const withInspectorControls = createHigherOrderComponent((BlockEdit) => {
    return (props) => {

        console.log(props)

        const onSelect = (tabName) => {
            console.log('Selecting tab', tabName);
        };

        return (
            <>
                <BlockEdit {...props} />
                <InspectorControls>
                    <PanelBody>My custom control</PanelBody>
                    <TabPanel
                        className="my-tab-panel"
                        activeClass="active-tab"
                        onSelect={onSelect}
                        tabs={[
                            {
                                name: 'tab-ptbr',
                                title: 'PT-BR',
                            },
                            {
                                name: 'tab-en',
                                title: 'EN',
                            },
                        ]}
                    >
                        {(tab) => <p>{tab.title}</p>}
                    </TabPanel>
                </InspectorControls>
            </>
        );
    };
}, 'withInspectorControl');

// wp.hooks.addFilter(
//     'editor.BlockEdit',
//     'my-plugin/with-inspector-controls',
//     withInspectorControls
// );